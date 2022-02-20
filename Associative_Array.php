<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<?php 

$number = array('Bob', 'Robert', 'John');
print_r($number);    

echo $number[2] . "<br>";

// Associative array
    
    //replace first index with key
$names = array("first_name" => 'Edwin', "last_name" => 'Longshanks');
print_r($names);
    
echo $names["first_name"] . " " . $names['last_name'];
    
?>
    
</body>
</html>