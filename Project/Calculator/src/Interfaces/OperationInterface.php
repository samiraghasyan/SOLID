<?php

namespace Calculator\Interfaces;


interface OperationInterface
{
    public function calculate(float $num1, float $num2): float;
}