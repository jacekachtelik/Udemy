<?php
/**
 * Enkapsulacja danych
 * Wszystkie właściwosci jako prywatne
 * Metody ustawiają właściwości
*/

class Account
{
    private $balance = 0;

    public function getBalance() {
        echo ("Account balanse: ".$this->balance."<br>");
    }

    public function deposit($amount) {
        $this->balance += $amount;
        echo ("The amount ".$amount." is been deposited in your account<br>");
        echo ("Account balanse: ".$this->balance."<br>");
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            echo ("The amount ".$amount." is withdraw from your account<br>");
            echo ("Remaining balanse: ".$this->balance."<br>");
        } else {
            echo ("Insufficient balanse: ".$this->balance."<br>");
        }

    }

}

$accObj = new Account();
$accObj->getBalance();
$accObj->deposit(100);
$accObj->withdraw(24);
