<?php 
/* THIS CONNECTS TO THE DATABASE */

$connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');
if(!$connection) {
    die("Database connection failed");
}

?>