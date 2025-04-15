<?php

namespace OrderSystem\Interfaces;

interface PaymentMethodInterface
{
    public function processPayment(float $amount): bool;
}