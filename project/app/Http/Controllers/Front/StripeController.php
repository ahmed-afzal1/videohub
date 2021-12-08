<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Config;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Validator;
use App\Models\SubscriptionPlan;
use App\Models\Order;
use App\Models\Notification;
use App\Models\Generalsetting;
use App\Models\User;
use Auth;
use DB;
class StripeController extends Controller
{
  public function __construct()
    {
        //Set Spripe Keys
        $stripe = Generalsetting::findOrFail(1);
        Config::set('services.stripe.key', $stripe->stripe_key);
        Config::set('services.stripe.secret', $stripe->stripe_secret);
    }


    public function store(Request $request){

      
        $plan = SubscriptionPlan::find($request->plan_id);
        $title = $plan->plan_name;
       
        $success_url = action('Front\PaymentController@payreturn');
        
            $validator = Validator::make($request->all(),[
                'cardNumber' => 'required',
                'cardCVC' => 'required',
                'month' => 'required',
                'year' => 'required',
                'order_amount' => 'required',
                'customer_name'  => 'required',
                'customer_phone' => 'required',
                'customer_email'  => 'required',
            ]);
      
           
        if ($validator->passes()) {
           
            $stripe = Stripe::make(Config::get('services.stripe.secret'));
            try{
           
                $token = $stripe->tokens()->create([
                    'card' =>[
                            'number' => $request->cardNumber,
                            'exp_month' => $request->month,
                            'exp_year' => $request->year,
                            'cvc' => $request->cardCVC,
                        ],
                    ]);

                if (!isset($token['id'])) {
                    return back()->with('error','Token Problem With Your Token.');
                }

                $charge = $stripe->charges()->create([
                    'card' => $token['id'],
                    'currency' =>  $request->currency_code,
                    'amount' => $request->order_amount,
                    'description' => $title,
                    ]);

                  
            // donar data store..............//
                $order = new Order;

                if ($charge['status'] == 'succeeded') {
                    $order['order_amount'] = $request->order_amount;
                    $order['payment_type'] = 'stripe';
                    $order['email'] = $request->customer_email;
                    $order['name'] = $request->customer_name;
                    $order['phone'] = $request->customer_phone;
                    $order['order_number'] = str_random(4).time();
                    $order['title'] = $title;
                    $order['payment_status'] = "Completed";
                    $order['txnid'] = $charge['balance_transaction'];
                    $order['charge_id'] = $charge['id'];
                    $order['plan_id'] = $request->plan_id;
                    $order['user_id'] = Auth::user()->id;
                    $order->save();

                    //Notification -----------//
                    $notification = new Notification;
                    $notification->order_id = $request->plan_id;
                    $notification->user_id = Auth::user()->id;
                    $notification->save();
                    return redirect($success_url);

                }
                
            }catch (Exception $e){
                return back()->with('unsuccess', $e->getMessage());
            }catch (\Cartalyst\Stripe\Exception\CardErrorException $e){
                return back()->with('unsuccess', $e->getMessage());
            }catch (\Cartalyst\Stripe\Exception\MissingParameterException $e){
                return back()->with('unsuccess', $e->getMessage());
            }
        }
        return back()->with('unsuccess', 'Please Enter Valid Credit Card Informations.');
    }


    
}
