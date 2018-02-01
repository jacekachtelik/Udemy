<?php
/**
 * Created by PhpStorm.
 * User: Jacek Achtelik
 * Date: 2018-01-29
 * Time: 12:46
 */

class CreditCard
{
    const CARDNUMBER = '1111222233334444';
    private $totalBalance = 1000;
    private $pinNumber ='1234';

    /**
     * @return mixed
     */
    public function getCardNumber()
    {
        return self::CARDNUMBER;
    }

    /**
     * @return mixed
     */
    public function getPin()
    {
        return $this->pinNumber;
    }

    /**
     * @param mixed $newPin
     */
    public function setPin($newPin)
    {
        if( preg_match( "/^[1-9]\d{3}$/", $newPin )) {
            $this->pinNumber = $newPin;
        } else {
            echo ( "Pin number should be a string of 4 digits and first digit should not be zero.");
        }

    }

    /**
     * @param int $totalBalance
     */
    private function setTotalBalance($totalBalance)
    {
        $this->totalBalance = $totalBalance;
    }

    /**
     * @return int
     */
    public function getTotalBalance()
    {
        return $this->totalBalance;
    }

/*    public function shopping($cardNumber, $pinNumber, $spendingMoney) {
        if($cardNumber===$this->getCardnumber() && $pinNumber===$this->getPin()) {
            $totalBalance = $this->getTotalBalance();
            if ($spendingMoney <= $totalBalance) {
                $remBalance = $totalBalance - $spendingMoney;
                $this->setTotalBalance($remBalance);
                echo  ("You have spend $spendingMoney pounds and your remaining balance is $remBalance.<br>");
            } else {
                echo ( "You don't have enough balance in your account.<br>");
            }
        }
    }*/

    public function withdrawMoney($cardNumber, $pinNumber, $withdrawMoney) {
        if($cardNumber===$this->getCardnumber() && $pinNumber===$this->getPin()) {
            $totalBalance = $this->getTotalBalance();
            $withdrawMoney = $withdrawMoney + ($withdrawMoney * 0.03);
            if ($withdrawMoney <= $totalBalance) {
                $remBalance = $totalBalance - $withdrawMoney;
                $this->setTotalBalance($remBalance);
                echo  ("You have spend $withdrawMoney pounds and your remaining balance is $remBalance.<br>");
            } else {
                echo ( "You don't have enough balance in your account.<br>");
            }
        }
    }


}

$card = new CreditCard();
$cardNo = $card->getCardNumber();
$card->setPin(1234);
$newPinNo = $card->getPin();
//$card->shopping('1111222233334444','1234',500);
//$balance = $card->getTotalBalance();
//$card->shopping('1111222233334444','1234',750);
//$balance = $card->getTotalBalance();
$card->withdrawMoney('1111222233334444','1234',500);
$balance = $card->getTotalBalance();
$card->withdrawMoney('1111222233334444','1234',750);
$balance = $card->getTotalBalance();

echo 'Numer karty to '.$cardNo;
echo "<br>";
echo 'Numer PIN to '.$newPinNo;
echo "<br>";
echo 'Balance '.$balance;
?>