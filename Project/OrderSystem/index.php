<?php
require __DIR__ . '/vendor/autoload.php';

use OrderSystem\Classes\Order;
use OrderSystem\Classes\OrderProcessor;
use OrderSystem\Classes\CreditCardPayment;
use OrderSystem\Classes\EmailNotifier;
use OrderSystem\Classes\DatabaseOrderRepository;


$order = new Order('12345', 99.99, ['item1', 'item2']);

$paymentMethod = new CreditCardPayment('4111111111111111', '12/25');

$notifier = new EmailNotifier('customer@example.com');


$dsn = 'mysql:host=localhost;dbname=order_system;charset=utf8';
$user = 'root';
$pass = '';
try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $repository = new DatabaseOrderRepository($pdo);


    $processor = new OrderProcessor($paymentMethod, $notifier, $repository);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}


$processor = new OrderProcessor($paymentMethod, $notifier, $repository);
$result = $processor->process($order);

if ($result) {
    echo "Order processed successfully!\n";
} else {
    echo "Order processing failed!\n";
}