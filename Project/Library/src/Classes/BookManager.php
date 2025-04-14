<?php

namespace Library\Classes;

use Library\Interfaces\BookRepositoryInterface;
use Library\Interfaces\ReportGeneratorInterface;

class BookManager
{
    private BookRepositoryInterface $repository;
    private ReportGeneratorInterface $reportGenerator;

    public function __construct(
        BookRepositoryInterface $repository,
        ReportGeneratorInterface $reportGenerator
    ) {
        $this->repository = $repository;
        $this->reportGenerator = $reportGenerator;
    }

    public function addBook(Book $book): void
    {
        $this->repository->save($book);
    }

    public function generateReport(): string
    {
        $books = $this->repository->findAll();
        return $this->reportGenerator->generate($books);
    }
}