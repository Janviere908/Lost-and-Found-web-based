<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Facades\PayPal;
use Srmklive\PayPal\Services\AdaptivePayments;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Models\Invoice;


class PaymentController extends Controller
{
    function paymentHandle($invoiceID){

        $data = [];

        $invoice=Invoice::find($invoiceID);

        $data['items'] = [

            [

                'name' => 'Lost document App',

                'price' => $invoice->totalAmount,

                'desc'  => 'Payment for document found',

                'qty' => 1

            ]

        ];

  

        $data['invoice_id'] = $invoice->id;

        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";

        $data['return_url'] = route('paymentSuccess');

        $data['cancel_url'] = route('paymentCancel');

        $data['total'] = $invoice->totalAmount;

  

        $provider = new ExpressCheckout;

  

        $response = $provider->setExpressCheckout($data);

  

        $response = $provider->setExpressCheckout($data, true);

  
        $invoice->paid=1;
        $invoice->save();


        return redirect($response['paypal_link']);

    }

    public function paymentSuccess()
    {
      return view('payment.success');
    }

    public function paymentCancel()
    {
        return view('payment.cancel');
    }

}
