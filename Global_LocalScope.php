<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   <?php
    
    $x = "outside"; //global
    
    function convert() {
        // declare this var globally
        global $x;
        $x = "inside"; // local
    }
    
    // global inside of function convert overrides this
    echo $x; 
    
    echo "<br>";
    
    //after function it changes to global scope
    convert();
    echo $x;
    echo $x;
    
    //prints outside again
    convert();
    
    ?>
    
</body>
</html>