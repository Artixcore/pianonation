<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {
        // Enter Your Stripe Secret
        // \Stripe\Stripe::setApiKey('sk_test_51LzRw5FeaHyBz9I6xJQVcE59uAfW8KPt72YHRl06wsmOA8kyd8u31wQWgkqKiaH4xXQAfjR5HD9ezTqllMdleG1w00JyieyuWm');

		// $amount = 100;
		// $amount *= 100;
        // $amount = (int) $amount;

        // $payment_intent = \Stripe\PaymentIntent::create([
		// 	'description' => 'Stripe Test Payment',
		// 	'amount' => $amount,
		// 	'currency' => 'INR',
		// 	'description' => 'Payment From Codehunger',
		// 	'payment_method_types' => ['card'],
		// ]);
		// $intent = $payment_intent->client_secret;

		return view('pur.payment');

    }

    public function afterPayment()
    {
        echo 'Payment Has been Received';
    }
}
