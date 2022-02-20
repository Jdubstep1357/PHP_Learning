<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
<?php
    
    function greeting($message) {
        echo $message;
    }
    
    //this gets sent to upper function
    greeting("Hi customer! How are you?");
    
    
    echo "<br>";
    
    function calculate($number1, $number2) {
        $sum = $number1 + $number2;
        
        echo $sum;
    }
    
    //these two numbers get sent up respectively
    calculate(48,48);
?>
    
</body>
</html>