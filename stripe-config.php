<?php

require_once 'stripe-shared.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  
  $priceId = $_GET['priceId'];
  $plan = \Stripe\Price::retrieve($priceId);
  echo json_encode(['plan' => $plan]);
}