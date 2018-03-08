<?php

/**
 * Class User
 */
class User {
//        Properties
    public $name = 'Jacek';
//        Methods

    /**
     * @return string
     */
    public function sayeHello()
    {
        return $this->name." says Hello";
    }

}

// Instatiate a user object from a user class
$user1 = new User();
$user1->name = 'Brad';
echo $user1->name;
echo "<br>";
echo $user1->sayeHello();
echo "<br>";
$user2 = new User();
$user2->name = 'Jeff';
echo "<br>";
echo $user2->sayeHello();



?>