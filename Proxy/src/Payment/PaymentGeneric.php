<?php

namespace src\Payment;


class PaymentGeneric implements Payment{
    private $realPayment;
    private $cardValid;

    public function __construct(Payment $realPayment){
        $this->realPayment = $realPayment;
        $this->cardValid = true;
    }

    public function processPayment(int $amount): string
    {
        if($this->cardValid){
            return $this->realPayment->processPayment($amount);
        }else{
            return "pagamento nao processado";
        }
    }

    public function disableCard():void{
        $this->cardValid = false;
    }
}