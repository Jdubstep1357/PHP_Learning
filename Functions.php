<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   <?php
    
    function init() {
        say_Something();
        echo "<br>";
        calculate();
    }
    
    function calculate() {
        echo 456 + 345;
    }
    
    
    function say_Something() {
        echo "Hello, my name is Nino. I am a crazy person. Yes I am";
    }
    
    init();
    ?>
    
</body>
</html>