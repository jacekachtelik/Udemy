<?php
class A 
{
    public function __construct()
    {
        echo "Class A constructor<br>";
    }
}

class B extends A
{
    public function __construct()
    {
        parent::__construct();
        echo "Class B constructor<br>";
    }
}

$aObj = new A();
$bObj = new B();

class Student
{
    private $firstName;
    private $lastName;
    private $age;

    public function __construct($fName, $lName, $age)
    {
        $this->firstName = $fName;
        $this->lastName = $lName;
        $this->age = $age;
    }
    public function showDetails()
    {
        echo $this->firstName."<br>";
        echo $this->lastName."<br>";
        echo $this->age."<br>";
    }

    public function __destruct()
    {
        echo "I am dying .... AAAAA.....";
    }

}

$studentObj = new Student('Jacek','Achtelik','38');
$studentObj->showDetails();
unset($studentObj);

?>