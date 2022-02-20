<!-- SUPERGLOBAL THAT SAVES ALL DATA FROM FORMS -->
<?php
// checks to see if data is there
if(isset($_POST['submit'])) {
    echo "Yes it works!";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!-- Picks up data that is sent -->
<!-- $_POST -->

<!-- method for post is sent to something else -->
<form action="form.php" method="post">
    <input type="text" placeholder="Enter user name">
    <input type="password" placeholder="Enter password"> 
    <br>
    <!-- name is linked to super global var -->
    <input type="submit" name="submit">
</form>

</body>
</html>