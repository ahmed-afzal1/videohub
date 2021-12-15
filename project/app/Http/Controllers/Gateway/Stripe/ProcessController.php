<?php

namespace App\Http\Controllers\Backend\Gateway\stripe;

use App\Http\Controllers\Backend\PlanController;
use App\Http\Controllers\Controller;

use Stripe;

class ProcessController extends Controller
{
    public static function process($request,$stripe , $payingAmount, $planSubscriber)
    {
        Stripe\Stripe::setApiKey($stripe->gateway_parameters->stripe_client_secret);

        $payment = Stripe\Charge::create([
            "amount" => $payingAmount * 100,
            "currency" => $stripe->gateway_parameters->gateway_currency,
            "source" => $request->stripeToken,
            "description" => "Payment For Booking {$planSubscriber->trx}"
        ]);

        $responseData = $payment->jsonSerialize();

        $transaction = $responseData['id'];

        $bal = \Stripe\BalanceTransaction::retrieve($responseData['balance_transaction']);

        $balJson = $bal->jsonSerialize();

        $fee_amount = number_format(($balJson['fee'] / 100), 4) /  $stripe->rate;

        if ($payment->status == 'succeeded') {
            
            PlanController::updateUserData($planSubscriber, $fee_amount, $transaction);

            $notify[] = ['success', 'Payment Successfully Done'];

            return redirect()->route('dashboard')->withNotify($notify);
        }

        $notify[] = ['error', 'Something Goes Wrong'];
        return redirect()->route('dashboard')->withNotify($notify);
    }
}