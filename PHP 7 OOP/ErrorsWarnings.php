<?php
error_reporting(E_ALL);

$fh = fopen('none-existing-file.txt','r');

// Divide by 0
$c = 10/0;

echo "Skrypt działa dalej";

trigger_error('Ostrzeżenie',E_USER_WARNING);

echo "Skrypt działa dalej 2";

class TestClass {
    // Stary konstruktor w php 4
    function TestClass() {
        echo "Starego typu konstruktor";
    }
}

$testClass = new TestClass();
echo "Skrypt działa dalej 3";