<?php

namespace src\Payment;

interface Payment{
    public function processPayment(int $amount):string;
}
