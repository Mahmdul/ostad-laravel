<?php
class Human{
    public $name;//property
    function sayHi(){
        echo "Assalamu alaikum";
    }
    function sayName(){
        echo "my name is {$this->name}\n";
    }
}

$h1 = new Human();
$h1->name = "Shohan"; //set operation
 $h1-> sayName();
