<?php

namespace Library\Classes;


use Library\Interfaces\BookRepositoryInterface;


class DatabaseBookRepository implements BookRepositoryInterface
{

    public function save(Book $book): void {

    }

    public function find(string $isbn): ?Book
    {
        // TODO: Implement find() method.
        return null;
    }

    public function findAll(): array
    {
        // TODO: Implement findAll() method.
        return [];
    }
}