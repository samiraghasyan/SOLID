<?php

namespace OrderSystem\Classes;

use OrderSystem\Interfaces\PaymentMethodInterface;

class CreditCardPayment implements PaymentMethodInterface
{

    public function __construct(
        private string $cardnumbre,
        private string $expiry
    )
    {

    }

    public function processPayment(float $amount): bool
    {
        // TODO: Implement processPayment() method.

        echo "Processing credit card payment of {$amount}\n";
        return true;
    }

}