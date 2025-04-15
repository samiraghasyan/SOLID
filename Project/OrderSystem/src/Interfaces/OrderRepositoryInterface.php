<?php

namespace OrderSystem\Interfaces;

use OrderSystem\Classes\Order;


interface OrderRepositoryInterface {
    public function save(Order $order): void;
    public function find(string $id): ?Order;
}