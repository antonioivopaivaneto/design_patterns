<?php

namespace src\Payment;

use src\Payment\Payment;

class CashPayment implements Payment{
    public function processPayment(int $amount): string
    {
        return "Pagamento de $amount recebido em dinheiro"; 
    }
}
