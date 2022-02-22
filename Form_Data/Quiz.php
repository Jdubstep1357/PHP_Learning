<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<!-- Step 1: Make a form that submits one value to POST super global -->

<form action="Quiz.php" method="post">
<input type="text" placeholder="Type something here" name="placeholder">
<input type="submit" name="submit" placeholder="Click this">
</form>

<?php 

if(isset($_POST['submit'])) {

$placeholder = $_POST['placeholder'];

echo "Hello " . $placeholder;

}
?>

</body>
</html>