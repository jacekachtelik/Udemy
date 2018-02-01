<?php
interface TestInterface {
    public function helloWorld();
}

class FirstTestClass implements TestInterface {
    public function helloWorld()
    {
        echo "This is interface method implementation from FirstTestClass";
    }
}




