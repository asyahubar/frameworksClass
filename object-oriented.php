<?php

// types of properties and methods in classes are: 'public', 'protected', 'private'
// methods can be declared with extra 'static' which means it can be called without an object
// good practice: 1 class - 1 file

class User {
    public $username;
    public $name;
    public $lastname;

    public function __construct($name, $lastname)
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }

    public function fullName() {
        return $this->name . ' ' . $this->lastname;
    }
}

$user1 = new User('Leslie', 'Jones');
$user1->username = 'Leslie4564775';

$user2 = new User("Mike", "Wilde");
$user2->username = "Mike457367";

var_dump($user1, $user2);

echo "<hr>";
echo $user2->fullName();
echo "<hr>";

// 'extends' copies everything from a centain class, but it can be overrided
class SuperUser extends User {

    public function fly()
    {
       echo 'Look at me mam, I\'m flying';
    }

    public function fullName()
    {
        return $this->lastname . ", " . $this->name;
    }
}

$user4 = new SuperUser('Clark', 'Kent');

echo $user4->fullName();

class Utility {
    static public function dd($data) {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        die;
    }
}

Utility::dd('something');