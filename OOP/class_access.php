<?php 

class Car {

    // same as var available throughout entire program
    public $wheel = 4;
    // it is only available to one class or subclass
    protected $hood = 1;
    // will only bs used inside of immediate class
    private $engine = 1;
    var $doors = 4;

    function showProperty() {
        // engine works due to it being wrapped inside of class Car
        echo $this->engine;
        }

}

$bmw = new Car();
$semi = new Semi();

// we can see showProprty due to it being referenced inside of parent class
echo $bmw->showProperty;

class Semi extends Car {
    function showProperty() {
        // protected shows due to it being referenced outside of it
        echo $this->hood;
        //engine does not work due to it being outside of the class
        echo $this->engine;
    }
}

echo $semi->showProperty();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>