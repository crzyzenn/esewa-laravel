<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Omnipay\Omnipay;

class PaymentController extends Controller
{
    protected $payment_gateway;

    public function __construct()
    {
        $this->payment_gateway = Omnipay::create('PhpEsewa_Secure');
        $this->payment_gateway->setScd(config('services.esewa.merchant_code'));
        $this->payment_gateway->setTestMode(config('services.esewa.test_mode'));
        
    }

    public function processPayment(Request $request)
    {
        try {
            $response = $this->payment_gateway->purchase([
                'amt' => $request->get('amt'),
                'txAmt' => 0,
                'psc' => 0,
                'pdc' => 0,
                'tAmt' => $request->get('amt'),
                'pid' => rand(10, 10000), //Your Purchase Unique ID
                'su' => route('payment-completed'),
                'fu' => route('payment-failed'),
            ])->send();
        } catch (Exception $e) {
            //return back with some proper payment somehow failed message.
        }
        if ($response->isRedirect()) {
            $response->redirect();
        } else {
            //return back with some proper payment somehow failed message.
        }
    }

    public function paymentCompleted(Request $request)
    {
        return redirect('/?payment-success');
        // $response = $this->payment_gateway->verifyPayment([
        //     'amt' => $request->get('amt'),
        //     'rid' => $request->get('refId'),
        //     'pid' => $request->get('oid'),
        // ])->send();
        


        // if ($response->isSuccessful()) {
        //     // Update your order payment status using $order_id
        //     //redirect users to show some congratulations message (To make them feel good)
        //     return redirect('/?payment-success');
        // } else {
        //     //IF SOMEHOW SOMETHING WENT WRONG INTERNALLY. Redirect users to route with proper message.
        //     // return redirect()->route('YOUR_ROUTE')->with('message', 'Your payment has been declined. Please retry.')
        //     return view('failed');
        // }
    }

    public function paymentFailed()
    {
        //Redirect user back with payment failed message 
        return redirect('/?payment-failed');
    }
}
