<?php

/* if (json_last_error() !== JSON_ERROR_NONE) {
	http_response_code(400);
	echo json_encode([ 'error' => 'Invalid request.' ]);
	exit;
} */

// require '../vendor/autoload.php';
// header('Content-Type: application/json');
// \Stripe\Stripe::setApiKey($config['stripe_secret_key']);

require '/var/www/html/wp-content/themes/ivd24/templates/vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51HmKDuHiOF4e4fQZOzC8cduYskKFARGxRr5VVD6gHX7Ckp4fARKHLVtzpw2vIuZZ9NpU1l4Ej0KpDoWO3RZSXoQU00kvfC1H9T');

header('Content-Type: application/json');

// $domain_url = 'https://www.ivd24immobilien.de';
