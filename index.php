<?php

require_once './autoload.php';


use Src\Library\Book;
use Src\Library\BookNotFoundException;
use Src\Library\LibraryCard;
use Src\User\User;


$book1 = new Book("1984", "George Orwell", "1234567890");
$book2 = new Book("To Kill a Mockingbird", "Harper Lee", "0987654321");
$book3 = new Book("The Great Gatsby", "F. Scott Fitzgerald", "1122334455");

// Создаем несколько пользователей
$user1 = new User("Dwayne", "Johnson", 1);
$user2 = new User("Wade", "Wilson", 2);

// Создаем библиотечные карты для пользователей
$card1 = new LibraryCard("0001");
$card2 = new LibraryCard("0002");

$card1->issueBook($book1);
$card1->issueBook($book2);
$card1->issueBook($book3);

$card1->listIssuedBooks();


// Проверим работу исключений
$testLibraryCard = new LibraryCard('1111');

try {

    $testTitle = '3 Body Problem';

    $testBook = $testLibraryCard->getBookByTitle($testTitle);
} 

catch (BookNotFoundException $e) {

    echo $e->exceptionInfo();
} 

catch (Exception $e) {

    echo $e->getMessage();
} 

finally {

    echo 'Сожалеем, что так получилось. Можете поискать другую книгу';
}