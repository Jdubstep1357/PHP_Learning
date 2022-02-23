<?php include "db.php";?>
<?php

/* This function pulls all data from users table */
function showAllData() {
    // makes sure connection is global
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if(!$result) {

        die("Query failed" . mysqli_error());
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
    // connect to the database, localhost, username, password, database name
    $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');


    if(!$connection) {
        // will not execute any code but shows error
        die("Database connection failed");
    }

    // using sql query inside of php code
    $query = "INSERT INTO users(username, password) ";
    // .= concatonates the text
    // use '' around $ due to them being strings
    $query .= "VALUES ('$username', '$password')";


    $result = mysqli_query($connection, $query);

    if(!$result) {

        die("Query failed" . mysqli_error());

    }


}

?>

