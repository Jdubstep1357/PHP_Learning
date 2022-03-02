<?php 

class Car {

        // instance
    function MoveWheels() {
        echo "Wheels move";
    }
}

// Object due to $bmw
$bmw = new Car();
$mercedes_benz = new Car();

// ACTIVATES FUNCTION
$bmw -> MoveWheels();
$mercedes_benz -> MoveWheels();

$bmw -> MoveWheels();


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