<?php
/**
 * Created by PhpStorm.
 * User: jacek
 * Date: 2018-03-08
 * Time: 12:15
 */

class Pages {
    public function __construct() {
//        echo "Pages loaded";
    }

    public function index() {
        
    }

    public function about($id) {
        echo "This is Pages/About<br>";
        echo $id;
    }
}