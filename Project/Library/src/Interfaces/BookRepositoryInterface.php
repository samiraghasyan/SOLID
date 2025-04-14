<?php

namespace Library\Interfaces;

use Library\Classes\Book;

interface BookRepositoryInterface{
    public function save(Book $book): void;
    public function find(string $isbn): ?Book;
    public function findAll(): array;
}