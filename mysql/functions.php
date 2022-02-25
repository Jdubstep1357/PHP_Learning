<?php include "db.php";?>
<?php

/* This function pulls all data from users table */
function showAllData() {
    // makes sure connection is global
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if(!$result) {

        die("Query failed");
    }


    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];

        echo "<option value='$id'>$id</option>";

    }
}


 

function UpdateTable() {
global $connection;
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    
    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";
    
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("QUERY FAILED" . 
           mysqli_error($connection));
    }
}


function DeleteRows() {

    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    
    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id ";
    
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("QUERY FAILED" . 
           mysqli_error($connection));
    }
}



?>

