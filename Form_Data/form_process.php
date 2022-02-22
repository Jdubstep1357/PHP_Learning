<!-- SUPERGLOBAL THAT SAVES ALL DATA FROM FORMS -->
<?php
// checks to see if data is there
if(isset($_POST['submit'])) {

// This posts the values 
$username = $_POST['username'];
$password = $_POST['password'];
    
    
    $names = array("Edwin", "Student", "Peter", "Mohad", "Jarvis");
    $minimum = 5;
    $maximum = 10;
    
    //strlen allows amount of characters
    if(strlen($username,$minimum)) {
        echo "Username has to be longer than 5";
    }
    
    if(strlen($username,$minimum)) {
        echo "Username can not be longer than 10";
    }
    
    //if username NOT in array
    if(!in_array($username,$names)) {
        echo "Sorry you cannot login";
    } else {
        echo "Welcome!";
    }
    
    
    
/* this echoes out the username and password once it is put in the form
echo "Hello " . $username;
echo "Your password is " .$password;
*/ 
    
}
?>