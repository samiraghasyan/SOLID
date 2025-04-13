<?php


namespace Calculator\Operations;


use Calculator\Interfaces\CalculatorInterface;
use Calculator\Interfaces\OperationInterface;

class Division implements OperationInterface, CalculatorInterface
{

    public function calculate(float $num1, float $num2): float
    {
        // TODO: Implement calculate() method.

        if ($num2 == 0) {
            throw new \http\Exception\InvalidArgumentException('Division by zero is not allowed.');
        }
        return $num1 / $num2;
    }
}