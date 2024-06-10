<?php

namespace Src\Library;

class BookNotFoundException extends \Exception {

    public function __construct($message = "Book not found(\n", $code = 0, \Exception $previous = null) {

        parent::__construct($message, $code, $previous);
    }

    public function __toString(): string {

        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    public function exceptionInfo() {

        echo '-----------<br/>';

        echo 'Здесь было исключение "BookNotFoundException"<br/>';

        echo '-----------<br/>';
    }
}