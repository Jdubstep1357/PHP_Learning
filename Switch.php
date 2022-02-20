<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Switch</title>
</head>
<body>
   
   <?php
    /* break stops the loop from repeating after it finds the value */
    
    $number = 35;
    
    switch($number) {
            case 34:
            echo "It is 34";
            break;
            case 35:
            echo "It is 35";
            break;
            case 36:
            echo "It is 36";
            break;
            case 24:
            echo "It is 24";
            break;
            
        default:
            echo "We could not find anything";
            break;
    }
    
    ?>
    
</body>
</html>