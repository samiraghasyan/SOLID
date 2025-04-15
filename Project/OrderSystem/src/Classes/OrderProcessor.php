<?php

namespace OrderSystem\Classes;

use OrderSystem\Interfaces\PaymentMethodInterface;
use OrderSystem\Interfaces\NotifierInterface;
use OrderSystem\Interfaces\OrderRepositoryInterface;

class OrderProcessor
{
    public function __construct(
        private PaymentMethodInterface   $paymentMethod,
        private NotifierInterface        $notifier,
        private OrderRepositoryInterface $repository
    )
    {

    }

    public function process(Order $order): bool {

        $paymentResult = $this->paymentMethod->processPayment($order->getTotal());

        if ($paymentResult) {
            $this->repository->save($order);
            $this->notifier->notify("Your order #{$order->getId()} has been processed");
            return true;
        }

        return false;
    }

}