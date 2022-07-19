<?php

// Premiere classe

// require_once('./Class/Cart.php');
// $cart = new Cart(0, 100);
// $cart->discount(5);
// var_dump($cart->getTotalPrice());


// Namespace

require_once('./Class/Paypal/Payment.php');
require_once('./Class/Stripe/Payment.php');
require_once('./Class/Users/User.php');

use \Class\Paypal\Payment as paymentPaypal;
use \Class\Stripe\Payment;

$paymentPaypal = new paymentPaypal();
$paymentStripe = new Payment();

var_dump($paymentPaypal, $paymentStripe);
