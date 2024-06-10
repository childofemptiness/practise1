<?php

namespace Src\User;

class User {

    private $firstName, $lastName, $userId;

    public function __construct($firstName, $lastName, $userId) {

        $this->firstName = $firstName;

        $this->lastName = $lastName;

        $this->userId = $userId;
    }

    public function getFullName() {

        return $this->firstName + ' ' + $this->lastName;
    }

    public function getUserId() {

        return $this->userId;
    }
}
