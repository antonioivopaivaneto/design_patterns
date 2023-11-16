<?php

use src\Payment\CashPayment;
use src\Payment\CreditCardPayment;
use src\Payment\PaymentGeneric;

include __DIR__.'./vendor/autoload.php';


$payment = new PaymentGeneric(new CreditCardPayment);
echo $payment->processPayment(100);

echo '<br>--------------------------Cartao--------------------------------------<br>';

$payment->disableCard();
echo $payment->processPayment(50);

echo '<br>------------------------Dinheiro----------------------------------------<br>';

$cashProxy = new PaymentGeneric(new CashPayment);
echo $cashProxy->processPayment(100);
