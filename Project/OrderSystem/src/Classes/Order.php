<?php

namespace OrderSystem\Classes;


class Order
{

    public function __construct(
        private int   $id,
        private float $total,
        private array $items
    )
    {

    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

}