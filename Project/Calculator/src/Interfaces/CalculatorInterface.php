<?php

namespace Calculator\Interfaces;


interface CalculatorInterface
{
    public function calculate(float $num1, float $num2): float;
}