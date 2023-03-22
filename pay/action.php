<?php

require_once('vendor/autoload.php');
\Stripe\Stripe::setApiKey('sk_test_51MhnZBSGtlnehUU1L0mw0Or6eivJdb0OJ2EZqStBTKGVDqSQnKbr62GRDQbI6V3uo1w9BzVYGNmv5giRu6Umh2PC00pWtxDIS4');
$charge = \Stripe\Charge::create([
    'source' => $_POST['stripeToken'],
    'description' => "10 cucumbers from Roger's Farm",
    'amount' => 50000,
    'currency' => 'inr',
  ]);
    echo '<pre>';
    print_r($charge);
    echo  '</pre>';
?>