<?php
require '../config/stripe.php';

// Here you should get the total amount from the cart
$totalAmount = 5000; // Amount in cents ($50.00)

// Create a Checkout Session
$session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'line_items' => [[
        'price_data' => [
            'currency' => 'usd',
            'product_data' => [
                'name' => 'Total Payment',
            ],
            'unit_amount' => $totalAmount,
        ],
        'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => 'https://your-domain.com/success.php',
    'cancel_url' => 'https://your-domain.com/cancel.php',
]);

header('Location: ' . $session->url);
exit();
?>
