<?php
namespace OrderSystem\Classes;

use OrderSystem\Classes\Order;
use PDO;
use OrderSystem\Interfaces\OrderRepositoryInterface;

class DatabaseOrderRepository implements OrderRepositoryInterface
{


    public function __construct(
        private PDO $connection,
    )
    {

    }

    public function save(Order $order): void
    {
        $stmt = $this->connection->prepare(
            "INSERT INTO orders (id, total, items) VALUES (:id, :total, :items)"
        );

        $stmt->execute([
            ':id' => $order->getId(),
            ':total' => $order->getTotal(),
            ':items' => json_encode($order->getItems())
        ]);
    }

    public function find(string $id): ?Order
    {
        $stmt = $this->connection->prepare(
            "SELECT * FROM orders WHERE id = :id LIMIT 1"
        );

        $stmt->execute([':id' => $id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$data) {
            return null;
        }

        return new Order(
            $data['id'],
            (float)$data['total'],
            json_decode($data['items'], true)
        );
    }
}
