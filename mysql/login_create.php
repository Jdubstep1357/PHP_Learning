<?php include "db.php";?>
<?php include "functions.php";?>

<?php
// calls function when form is submitted
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $connection = mysqli_connect('localhost','root','root','loginapp');
        if(!$connection) {
            die("Database connection failed");
        }

        $query = "INSERT INTO users(username,password) ";
        $query .= "VALUES ('$username', '$password')";

        $result = mysqli_query($connection, $query);

        if(!$result) {
            die('QUERY FAILED');
        }
    }


?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- BOOTSTRAP LINKS -->
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- JAVASCRIPT LINKS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <div class="col-sm-6">
        <form action="login_create.php" method="post">
            <div class="form-group">
               <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
               <label for="password">Password</label>
                <input type="text" name="password" class="form-control">
            </div>
            
            <input class="btn btn-primary" type="submit" value="submit" name="submit">
        </form>
    </div>
</div>
    
</body>
</html>