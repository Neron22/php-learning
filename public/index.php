<?php

// Premiere classe

// require_once('./Class/Cart.php');
// $cart = new Cart(0, 100);
// $cart->discount(5);
// var_dump($cart->getTotalPrice());


// Namespace
// On commente les require parce qu'on a codé un petit autoloader
// require_once('./Class/Paypal/Payment.php');
// require_once('./Class/Stripe/Payment.php');
// require_once('./Class/Users/User.php');


// Je commente parce qu'on utilise maintenant l'autoloader de composer
// spl_autoload_register(function($class) {
//   // concaténation pour avoir le chemin de notre require
//   $path = dirname(__DIR__) . '/' . str_replace('\\', '/', $class) . '.php';
//   // s'il y a un fichier, on require :
//   if (file_exists($path)) {
//     require $path;
//   }
// });

// use \Class\Paypal\Payment as paymentPaypal;
// use \Class\Stripe\Payment;
// use \Colors\RandomColor;

// $paymentPaypal = new paymentPaypal();
// $paymentStripe = new Payment();

// var_dump($paymentPaypal, $paymentStripe);

// var_dump(RandomColor::one());

// use Class\Enums\OfficeStatus;

// $reservation = new OfficeReservation();

// if (OfficeStatus::APPROVAL_PENDING == $reservation->status) echo 'en attente !';

// use Class\OfficeReservation;

use Class\Peugeot;

require '../vendor/autoload.php';

$peugeot = new Peugeot('peugeot');
var_dump($peugeot->rouler(), $peugeot->marque());
