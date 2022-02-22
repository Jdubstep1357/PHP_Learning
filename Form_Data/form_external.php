<!DOCTYPE html>
<!-- Test123 -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!-- Picks up data that is sent -->
<!-- $_POST -->

<!-- this sends data to other page -->
<form action="form_process.php" method="post">
    <input type="text" name="username" placeholder="Enter user name">
    <input type="password" name="password" placeholder="Enter password">
    <br>
    <!-- name is linked to super global var -->
    <input type="submit" name="submit">
</form>

</body>
</html>
