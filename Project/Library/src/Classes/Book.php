<?php

namespace Library\Classes;

class Book
{
    public function __construct(
        private string $title,
        private string $author,
        private string $isbon,
    )
    {
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getIsbon(): string
    {
        return $this->isbon;
    }
}