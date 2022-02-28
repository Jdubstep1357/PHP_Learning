<?php include "db.php";?>
<?php include "functions.php";?>
<?php include "includes/header.php"; ?>
<?php include "includes/footer.php"; ?>

<?php
if(isset($_POST['submit'])) {
    DeleteRows();
}
?>


<!DOCTYPE html>
<html lang="en">

<body>
   
   
<div class="container">
    <div class="col-sm-6">
    
        
        <form action="login_delete.php" method="post">
            <div class="form-group">
               <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
               <label for="password">Password</label>
                <input type="text" name="password" class="form-control">
            </div>
            
            <div class="form-group">
                
                <select name="id" id="">
                   <?php
                        /* This is from functions.php */
                        showAllData();
                    
                    ?>
                    
                    
                </select>
                
            </div>
            
            <!-- When you put in the username and password, it over-rides the original data -->
            <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
        </form>
    
    

    </div>

<?php include "includes/footer.php"; ?>