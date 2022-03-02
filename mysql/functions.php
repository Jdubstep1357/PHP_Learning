<?php include "db.php";?>
<?php

//  CREATEROWS()
function createRows() {
    if(isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];

        // stops hackers or other people from doing things
        $username = mysqli_real_escape_string($connection, $username );
        $password =  mysqli_real_escape_string($connection, $password );

        $query = "INSERT INTO users(username,password) ";
        $query .= "VALUES ('$username', '$password')";

        $result = mysqli_query($connection, $query);

        if(!$result) {
            die("Query failed!");
        } else {
            echo "Record created!";
        }
    }
}


//  READROWS()
function readRows() {
// using sql query inside of php code
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query failed');
    }
            // this gathers all the data from rows from php_myadmin
            while($row = mysqli_fetch_assoc($result)) {
                print_r($row);
             
            }
}




// SHOWALDATA()

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


 
//  UPDATE TABLE()
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
    } else {
        echo "Record updated!";
    }
}



//  DELETEROWS()
function DeleteRows() {
        if(isset($_POST['submit'])) {
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
        } else {
            echo "Record Deleted";
        }
    }
}




?>

