<?php 
/* WEB DOCUMENTATION
EXAMPLE OF URL: localhost/demo/get.php?id=10&source=reports
prints out Array( [id] => 10 [source] => reports)
& is a seperator ? passes parameter
*/


// $_GET is superglobal variable, accessed anywhere in code, converts to associateive array
// print_r prints out what is inside of arrays
print_r($_GET) 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>


<?php 
$id = 10;
// button automatically linked to ref link
$button = "Button linked top"
?>

<!-- Send information via click -->
<a href="get.php?id=<?php echo $id;?>"><?php echo $button;?></a>
    
</body>
</html>