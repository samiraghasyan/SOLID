<?php


namespace Calculator\Operations;


use Calculator\Interfaces\CalculatorInterface;
use Calculator\Interfaces\OperationInterface;

class Multiplication implements OperationInterface, CalculatorInterface
{
    public function calculate(float $num1, float $num2): float
    {
        return $num1 * $num2;
    }
}