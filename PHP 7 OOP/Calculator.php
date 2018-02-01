<?php

/*
 * Simple Calculator
For this PHP code exercise we will explore Classes, Object and methods by creating a Calculator class. It will be a very simple Calculator class that can do 4 tasks add, subtract, multiply and divide.

Note: Use exact same names for class, methods or variables as i will suggest, because i have written a testing code based on these names.

Follow the instructions bellow to write Calculator class

1: Define a class Calculator.

2: Define first public method add(). This method should take two parameters $number1 and $number2  and It should return the sum of both parameters.

First you have to check the values of $number1 and $number2 are numeric. You can check this using Php's built in function is_numeric() in if condition.
If values are not numeric then print the message "Both values should be numeric".
If values are numeric Then return their sum.

3: Define second public method subtract(). This method should also take two parameters $number1 and $number2  and It should subtract $number2 from $number1.

First you have to check the values of $number1 and $number2 are numeric.
If values are not numeric then print the message "Both values should be numeric".
If values are numeric Then subtract  $number2 from $number1 and return the result.

4: Define third public method multiply(). This method should also take two parameters $number1 and $number2  and It should multiply both parameters.

First you have to check the values of $number1 and $number2 are numeric.
If values are not numeric then print the message "Both values should be numeric".
If values are numeric Then multiply $number2 and $number1 and return the result.

5: Define forth public method divide(). This method should also take two parameters $number1 and $number2 and It should divide $number1 by $number2.

First you have to check the values of $number1 and $number2 are numeric.
If values are not numeric then print the message "Both values should be numeric".
You also have to check that the value of $number2 is not a zero If it is zero then print the message that "The value of $number2 should not be zero". (Because In division dividend/divisor = quotient. If divisor is zero than quotient will be infinity).
If both values are numeric and $number2 is not zero Then divide $number1 by $number2 and return the result.
You have successfully write a Calculator class now its time to create its object and test its methods.

6: Create a new object of Calculator class and assign it to a variable $calc.

7: Call add(), subtract(), multiply()  and divide() with different sets of two arguments and use echo to print their answer.
 */

class Calculator {
    public function add($number1, $number2) {
        if (!is_numeric($number1) || !is_numeric($number2)) {
            exit("Both values should be numeric");
        } else {
            return $number1 + $number2;
        }
    }

    public function subtract($number1, $number2) {
        if (!is_numeric($number1) || !is_numeric($number2)) {
            exit("Both values should be numeric");
        } else {
            return $number1 - $number2;
        }
    }

    public function multiply($number1, $number2) {
        if (!is_numeric($number1) || !is_numeric($number2)) {
            exit("Both values should be numeric");
        } else {
            return $number1 * $number2;
        }
    }

    public function divide($number1, $number2) {
        if (!is_numeric($number1) || !is_numeric($number2)) {
            exit("Both values should be numeric");
        } elseif ($number2 == 0) {
            exit("The value of number2 should not be zero");
        } else {
            return $number1 / $number2;
        }
    }

}

$calc = new Calculator();
$sum = $calc->add(10,20);
echo ($sum)."<br>";
$substract = $calc->subtract(50,26);
echo($substract)."<br>";
$multiply = $calc->multiply(35,12);
echo ($multiply)."<br>";
$divide = $calc->divide(32,8);
echo ($divide)."<br>";

?>