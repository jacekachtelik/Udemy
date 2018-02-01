<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

class Dress {
    const SMALL = "Small";
    const MEDIUM = "Medium";
    const LARGE = "Large";
    public $color = "red";
    private $fabric = "linen";
    private $design = "Slim Fit Blazer";

    public function displayInfo() {
        echo "The info about the dress.<br>";
        echo $this->color;
        echo "<br>";
        echo $this->design;
        echo "<br>";
        echo $this->fabric;
        echo "<br>";
        echo self::MEDIUM;
        echo "<br>";
    }

    private function helloWorld() {
        echo "Hello World method.<br>";
//        $this->displayInfo();
    }
}

$dress = new Dress();

var_dump('Obiekt Dress1:',$dress);
echo "<br>";
var_dump('Własciwość przed zmianą:',$dress->color);
$dress->color = "black";
echo "<br>";
var_dump('Własciwość po zmianie:',$dress->color);
echo "<br>";
$dress->displayInfo();
echo "Wyświetlanie właściwości<br>";
echo $dress->color;
echo "<br>";
echo ($dress::LARGE."<br>");

/**
 * Tu są błędy
 */
echo $dress->fabric; // private, działa dla public
$dress->helloWorld(); // private, działa dla public
echo ($result."<br>");


?>