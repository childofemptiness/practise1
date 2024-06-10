<?php

namespace Src\Library;

class Book {

    private $title, $author, $isbn;

    public function __construct($title, $author, $isbn) {

        $this->title = $title;

        $this->author = $author;

        $this->isbn = $isbn;
    }

    public function getTitle() {

        return $this->title;
    }

    public function getAuthor() {

        return $this->author;
    }

    public function getIsbn() {
        
        return $this->isbn;
    }
}
