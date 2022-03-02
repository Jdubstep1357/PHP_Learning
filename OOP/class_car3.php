<?php 

class Car {

    var $wheel = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

        // instance
    function MoveWheels() {
        //how we reference class inside of class
        $this->wheels = 10;
        }

        function CreateDoors() {
            $this->doors = 6;
            }
}

$bmw = new Car();
$mercedes_benz = new Car();
$truck = new Car();

echo $bmw->wheel . "<br>";
echo $truck->wheels = 10 . "<br>";
$truck->CreateDoors();
echo $truck->doors;




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