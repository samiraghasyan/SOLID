<?php

namespace Library\classes;

use Library\Classes\Book;

class EBook extends Book
{

    public function __construct(
        string         $title,
        string         $author,
        string         $isbn,
        private string $fileFormat
    )
    {
        parent::__construct($title, $author, $isbn);
    }

    /**
     * @return string
     */
    public function getFileFormat(): string
    {
        return $this->fileFormat;
    }

    function printBookInfo(Book $book)
    {
        echo $book->getTitle() . ' by ' . $book->getAuthor();
    }

}

