<?php

/**
 * Class User
 */
class User {
//        Properties
    private $name;
    private $age;
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

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }



    public function __destruct()
    {
        echo "Destructor run<br>";
    }


    // __get MAGIC METHOD
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    // __set MAGIC METHOD
    public function __set($property,$value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
        return $this;
    }
}

// Instatiate a user object from a user class
$user1 = new User('Jacek',39);
echo "<br>";

echo $user1->getName();
echo "<br>";
$user1->setName('Marta');
echo "<br>";
echo $user1->getName();
echo "<br>";
echo $user1->__get('name');
echo "<br>";
echo $user1->__get('age');
echo "<br>";
$user1->__set('age',41);
echo "<br>";
echo $user1->__get('age');
echo "<br>";
echo $user1->sayeHello();
echo "<br>";
$user2 = new User('Pacia',35);
echo "<br>";
echo $user2->sayeHello();



?>