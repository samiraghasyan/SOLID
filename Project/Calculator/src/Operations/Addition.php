<?php


namespace Calculator\Operations;

use Calculator\Interfaces\CalculatorInterface;
use Calculator\Interfaces\OperationInterface;

class Addition implements OperationInterface, CalculatorInterface
{

    public function calculate(float $num1, float $num2): float
    {
        // TODO: Implement calculate() method.
        return $num1 + $num2;
    }
}