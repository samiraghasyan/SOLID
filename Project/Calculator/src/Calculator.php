<?php
namespace Calculator;

use Calculator\Interfaces\CalculatorInterface;

class Calculator
{
    private $operation;

    public function __construct(CalculatorInterface $operation)
    {
        $this->operation = $operation;
    }

    public function setOperation(\Interfaces\CalculatorInterface $operation): void
    {
        $this->operation = $operation;
    }

    public function calculate(float $num1, float $num2): float
    {
        return $this->operation->calculate($num1, $num2);
    }
}