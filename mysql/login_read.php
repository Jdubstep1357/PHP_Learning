<?php 

// connect to the database, localhost, username, password, database name
$connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');


if(!$connection) {
    // will not execute any code but shows error
    die("Database connection failed");
}

// using sql query inside of php code
$query = "SELECT * FROM users";


$result = mysqli_query($connection, $query);

if(!$result) {

    die("Query failed" . mysqli_error());

}


?>





<!DOCTYPE html>
<html lang="en">
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
    
    <?php
        
        // this gathers all the data from rows from php_myadmin
        while($row = mysqli_fetch_assoc($result)) {
            
            ?>
            
            <!-- PRE formats the data from php in an organized way -->
            <pre>
            <?php
            /* prints the row from php */
            print_r($row);
            ?>
            </pre>
            
            <!-- Finish up rest of code right here -->
            <?php
        }
        
        ?>
    
    

    </div>
</div>
    
</body>
</html>