<?php

namespace src\Payment;

use src\Payment\CreditCardPayment;

class creditCardProxy implements Payment{
    private $realPayment;
    private $cardValid;

    public function __construct(){
        $this->realPayment = new CreditCardPayment();
        $this->cardValid = true;
    }

    public function processPayment(int $amount): string
    {
        if($this->cardValid){
            return $this->realPayment->processPayment($amount);
        }else{
            return "cartao de credito invalido. pagamento nao processado";
        }
    }

    public function disableCard():void{
        $this->cardValid = false;
    }
}