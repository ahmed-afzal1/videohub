<?php

namespace App\Http\Controllers\Front;
use App\Classes\GeniusMailer;
use App\Models\Order;
use App\Models\Generalsetting;
use App\Models\SubscriptionPlan;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use DB;  
use Auth;
use PayPal\Api\Amount;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;

class PaymentController extends Controller
{

    private $_api_context;

    public function __construct()
    {
       
        $gs = Generalsetting::find(1);
        $paypal_conf = \Config::get('paypal');
        $paypal_conf['client_id'] = $gs->paypal_client_id;
        $paypal_conf['secret'] = $gs->paypal_client_secret;
        $paypal_conf['settings']['mode'] = $gs->paypal_sendbox_check == 1 ? 'sandbox' : 'live';
       
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

 public function store(Request $request){
    // dd($request->all());

        $request->validate([
            'order_amount' => 'required',
            'customer_name'  => 'required',
            'customer_phone' => 'required',
            'customer_email'  => 'required',
        ]);
  
    $input = $request->all();
    $settings = Generalsetting::findOrFail(1);

    $plan = SubscriptionPlan::find($request->plan_id);
    $title = $plan->plan_name;

    $order['order_number'] = str_random(4).time();

    $order['order_amount'] = $request->order_amount;
    $cancel_url = action('Front\PaymentController@paycancle');
    $notify_url = route('payment.notify');
    $success_url = action('Front\PaymentController@payreturn');


    $payer = new Payer();
    $payer->setPaymentMethod('paypal');
    $item_1 = new Item();
    $item_1->setName($title) /** item name **/
        ->setCurrency($request->currency_code)
        ->setQuantity(1)
        ->setPrice($request->order_amount); /** unit price **/
    $item_list = new ItemList();
    $item_list->setItems(array($item_1));
    $amount = new Amount();
    $amount->setCurrency($request->currency_code)
        ->setTotal($request->order_amount);
    $transaction = new Transaction();
    $transaction->setAmount($amount)
        ->setItemList($item_list)
        ->setDescription($title.' Via Paypal');
    $redirect_urls = new RedirectUrls();
    $redirect_urls->setReturnUrl($notify_url) /** Specify return URL **/
        ->setCancelUrl($cancel_url);
    $payment = new Payment();
    $payment->setIntent('Sale')
        ->setPayer($payer)
        ->setRedirectUrls($redirect_urls)
        ->setTransactions(array($transaction));
   
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            return redirect()->back()->with('unsuccess',$ex->getMessage());
        }
        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }
    /** add payment ID to session **/
          Session::put('paypal_data',$input);
          Session::put('order_data',$order);
          Session::put('paypal_payment_id', $payment->getId());
    if (isset($redirect_url)) {
        /** redirect to paypal **/
        return Redirect::away($redirect_url);
    }
    return redirect()->back()->with('unsuccess','Unknown error occurred');

          if (isset($redirect_url)) {
              /** redirect to paypal **/
              return Redirect::away($redirect_url);
          }
          return redirect()->back()->with('unsuccess','Unknown error occurred');

 }

     public function paycancle(){
         return redirect()->back()->with('unsuccess','Payment Cancelled.');
     }

     public function payreturn(){
         return view('front.success');
     }


     public function notify(Request $request)
     {

         $paypal_data = Session::get('paypal_data');
         $order_data = Session::get('order_data');
         $success_url = action('Front\PaymentController@payreturn');
         $cancel_url = action('Front\PaymentController@paycancle');
         $input = $request->all();
         /** Get the payment ID before session clear **/
         $payment_id = Session::get('paypal_payment_id');
         /** clear the session payment ID **/
         if (empty( $input['PayerID']) || empty( $input['token'])) {
             return redirect($cancel_url);
         } 
         $payment = Payment::get($payment_id, $this->_api_context);
         $execution = new PaymentExecution();
         $execution->setPayerId($input['PayerID']);
         /**Execute the payment **/
         $result = $payment->execute($execution, $this->_api_context);

         if ($result->getState() == 'approved') {
             $resp = json_decode($payment, true);

                     $settings = Generalsetting::findOrFail(1);
                     $order = new order;
                     $order['order_amount'] = $paypal_data['order_amount'];
                     $order['payment_type'] = 'paypal';
                     $order['email'] = $paypal_data['customer_email'];
                     $order['name'] = $paypal_data['customer_name'];
                     $order['number'] = $paypal_data['customer_phone'];
                     $order['order_number'] = str_random(4).time();
                     $order['title'] = $resp['transactions'][0]['description'];
                     $order['payment_status'] = "Completed";
                     $order['user_id'] = Auth::user()->id;
                     $order['plan_id'] = $paypal_data['plan_id'];
                     $order['txnid'] = $resp['transactions'][0]['related_resources'][0]['sale']['id'];

                    $order->save();

                  //Notification -----------//
                  $notification = new Notification;
                  $notification->order_id = $paypal_data['plan_id'];
                  $notification->save();

                    
            Session::forget('paypal_data');
        
             return redirect($success_url);
 
         }
         return redirect($cancel_url);
     }




}
