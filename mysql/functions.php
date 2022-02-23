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

?>

