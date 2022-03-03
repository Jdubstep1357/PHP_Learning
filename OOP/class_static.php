<?php 

class Car {

    // attached to class, not instance
    static $wheel = 4;
    var $hood = 1;


    function MoveWheels() {
        // how to refer to static inside of function
        Car::$wheel = 10;
        }

    }

$bmw = new Car();

//DOES NOT WORK due to static
$bmw->wheel;

// how to call static data
Car::MoveWheels();

// :: is how you refer static class instead of -> 
echo Car::$wheel;




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