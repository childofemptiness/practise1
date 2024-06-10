<?php


namespace Src\Library;

class LibraryCard {

    private $cardNumber, $issuedBooks;

    public function __construct($cardNumber) {

        $this->cardNumber = $cardNumber;

        $this->issuedBooks = [];
    }

    public function issueBook(Book $book) {

        if (!in_array($book, $this->issuedBooks)) {

            $this->issuedBooks[] = $book;
        }
    }

    public function returnBook(Book $book) {

        $bookKey = array_search($book, $this->issuedBooks);

        if ($book !== false) {

            unset($this->issuedBooks[$bookKey]);
        }
    }

    public function listIssuedBooks() {

        foreach($this->issuedBooks as $book) {

            echo 'Название: ' . $book->getTitle() . ' Автор: ' . $book->getAuthor() . '<br/>';
        }
    }

    // для проверки исключения
    public function getBookByTitle($title) {

        foreach($this->issuedBooks as $book) {

            if ($book->getTitle() === $title) {

                return $book;
            }
        }

        throw new BookNotFoundException("Book with title '{$title}' not found.<br/>");
    }
}