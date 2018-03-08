<?php

/**
 * Class User
 */
class User {
//        Properties
    public $name;
    public $age;
//        Methods

    public function __construct($name, $age)
    {
        echo 'Class'.__CLASS__ . "instantiated<br>";
        echo "Constructor run<br>";
        $this->name = $name;
        $this->age = $age;
    }

    public function sayeHello()
    {
        return $this->name." is ".$this->age." years old.<br>";
    }

    public function __destruct()
    {
        echo "Destructor run<br>";
    }

}

// Instatiate a user object from a user class
$user1 = new User('Jacek',39);
echo $user1->name;
echo "<br>";
echo $user1->sayeHello();
echo "<br>";
$user2 = new User('Pacia',35);
echo "<br>";
echo $user2->sayeHello();



?>