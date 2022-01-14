<?php

require_once 'stripe-shared.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $input = file_get_contents('php://input');
  $body = json_decode($input);

  // Set the default payment method on the customer
  \Stripe\Customer::update($body->customerId, [
    'invoice_settings' => [
      'default_payment_method' => $body->paymentMethodId
    ]
  ]);
  // Create the subscription
  $subscription = \Stripe\Subscription::create([
    'customer' => $body->customerId,
    'default_tax_rates' => [$body->taxrateId],  // ['txr_1EqLfttttttAyn8ogk'],//hong
    'items' => [
      [
        //'plan' => 'SUBSCRIPTION_PLAN_ID',
        'price' => $body->priceId, // hong
      ],
    ],
    'coupon' => $body->couponId,// hong
    'expand' => ['latest_invoice.payment_intent'],
  ]);

  echo json_encode($subscription);
  
}