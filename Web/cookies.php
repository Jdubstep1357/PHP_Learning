<?php

// 3 parameters: 1) name 2) value 3)
setcookie('', '', '');

$name = "Somename";
$value = 100;
// multiple seconds (60) * minutes (60) * hours (24) * days (7)
$expiration = time($name,$value,$expiration) + (60*60*24*7);
setcookie($name,$value,$expiration);

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