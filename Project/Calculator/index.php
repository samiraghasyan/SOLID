<?php

require __DIR__ . '/vendor/autoload.php';

use Calculator\OperationFactory;
use Calculator\Calculator;


$operation = OperationFactory::create('*');
$calculator = new Calculator($operation);
echo $calculator->calculate(1005,15453);