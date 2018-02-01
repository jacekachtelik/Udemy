<?php
/**
 * Created by PhpStorm.
 * User: jacek
 * Date: 2018-01-31
 * Time: 07:42
 */

class MyObject
{
    public function __construct()
    {
        echo  "I have just been created.";
    }

    public function __destruct()
    {
        echo "I lived only for 5 seconds in the memory.";
    }
}

echo date('h:i:s');
$testObj = new MyObject();
sleep(5);
unset($testObj);
echo date('h:i:s');