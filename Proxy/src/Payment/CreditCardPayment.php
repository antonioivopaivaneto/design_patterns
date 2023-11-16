<?php

namespace src\Payment;

use src\Payment\Payment;

class CreditCardPayment implements Payment{
    public function processPayment(int $amount): string
    {
        return "Pagamento de $amount processado com cartao de credito"; 
    }
}
