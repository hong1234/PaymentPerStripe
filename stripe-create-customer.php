<?php

require_once 'stripe-shared.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$input = file_get_contents('php://input');
    $body = json_decode($input);

    // Create a new customer object
    $customer = \Stripe\Customer::create([
        'name' => $body->name,
        'email' => $body->email
    ]);
  
    // Create a SetupIntent to set up our payment methods recurring usage
    $setup_intent = \Stripe\SetupIntent::create([
        'payment_method_types' => ['card', 'sepa_debit'],
        'customer' => $customer['id']
    ]);

    echo json_encode(['customer' => $customer, 'setupIntent' => $setup_intent]);
}