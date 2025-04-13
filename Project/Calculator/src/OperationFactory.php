<?php

namespace Calculator;

use Calculator\Interfaces\CalculatorInterface;
use Calculator\Operations\Addition;
use Calculator\Operations\Subtraction;
use Calculator\Operations\Division;
use Calculator\Operations\Multiplication;

class OperationFactory
{
    public static function create(string $operation): CalculatorInterface
    {
        return match ($operation){
            '+' => new Addition(),
            '-' => new Subtraction(),
            '*' => new Multiplication(),
            '/' => new Division(),
            default => throw new InvalidArgumentException('Invalid operation')
        };
    }
}