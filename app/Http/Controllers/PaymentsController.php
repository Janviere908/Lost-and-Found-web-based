<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Facades\PayPal;
use Srmklive\PayPal\Services\AdaptivePayments;
use Srmklive\PayPal\Services\PayPal as PayPalClient;




class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];

        $data['items'] = [

            [

                'name' => 'ItSolutionStuff.com',

                'price' => 100,

                'desc'  => 'Description for ItSolutionStuff.com',

                'qty' => 1

            ]

        ];

  

        $data['invoice_id'] = 1;

        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";

        $data['return_url'] = route('paymentSuccess');

        $data['cancel_url'] = route('paymentCancel');

        $data['total'] = 100;

  

        $provider = new ExpressCheckout;

  

        $response = $provider->setExpressCheckout($data);

  

        $response = $provider->setExpressCheckout($data, true);

  

        return redirect($response['paypal_link']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    public function paymentSuccess()
    {
        echo "sucess";
    }

    public function paymentCancel()
    {
        echo "cancel";
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
