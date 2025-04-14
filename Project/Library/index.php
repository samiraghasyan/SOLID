<?php
require_once __DIR__ . '/vendor/autoload.php';

use Library\Classes\Book;
use Library\Classes\EBook;
use Library\Classes\DatabaseBookRepository;
use Library\Classes\PdfReportGenerator;
use Library\Classes\BookManager;


$repository = new DatabaseBookRepository();
$reportGenerator = new PdfReportGenerator();
$bookManager = new BookManager($repository, $reportGenerator);

$book1 = new Book("Soul", "Reza Agha", "978-0132350884");
$book2 = new EBook("Human", "Samir Aghasiyan", "978-0201633610", "HTML");

$bookManager->addBook($book1);
$bookManager->addBook($book2);



print_r($bookManager->generateReport());
