<?php include "functions.php" ?>
    

<?php 
	/*  Step 1 - Create a database in PHPmyadmin */
	$connection = mysqli_connect('localhost', 'root', 'root', 'Quiz_Time');
	if(!$connection) {
		die("Database connection failed");
	} else {
		echo "Database connected!";
	}

?>



<?php


		// Step 2 - Create a table like the one from the lecture



		// Step 3 - Insert some Data

			if(isset($_POST['submit'])) {
				global $connection;
				$username = $_POST['username'];
				$password = $_POST['password'];
		
				$query = "INSERT INTO users(username,password) ";
				$query .= "VALUES ('$username', '$password')";
		
				$result = mysqli_query($connection, $query);
		
				if(!$result) {
					die("Query failed!");
				} else {
					echo "Record created!";
				}
			}

			$query = "SELECT * FROM users";
			$result = mysqli_query($connection, $query);
		
			if(!$result) {
				die('Query failed');
			}
					// this gathers all the data from rows from php_myadmin
					while($row = mysqli_fetch_assoc($result)) {
						print_r($row);
					 
					}
?>

<html>
	<body>
		<div class="container">
			<div class="col-sm-6">
			<h1 class="text-center">Create</h1>
				<form action="login_create.php" method="post">
					<div class="form-group">
					<label for="username">Username</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
					<label for="password">Password</label>
						<input type="text" name="password" class="form-control">
					</div>
					
					<input class="btn btn-primary" type="submit"  name="submit" value="CREATE">
				</form>
			</div>
		</div>
	</body>
</html>



	
	





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
