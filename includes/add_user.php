<?php error_reporting(0); ?>

<?php 

$message = "";
if (isset($_POST['add'])) {
	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if (empty($username) || empty($email) || empty($password)) {
		
		$message = "<p class='bg-danger'>username or email or password is empty</p>";
	} else {

		$query = "SELECT * FROM users WHERE email = '{$email}'";
		$select_email = mysqli_query($connection, $query);

		while ($row = mysqli_fetch_assoc($select_email)) {
			
			$db_email = $row['email'];
		}

		if ($email === $db_email) {
			$message = "<p class='bg-danger'>this email already taken</p>";
		} else {


			$query = "INSERT INTO users(username, email, password) ";
			$query .= "VALUES('$username', '$email', '$password')";
			$add_query = mysqli_query($connection, $query);

			if (!$add_query) {
				die("query failed" . mysqli_query($connection));
			} else {

				$message = "<p class='bg-danger'>user added<a href='register.php'> View user</a></p>";
			}
		}
	}
}







 ?>









<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add User</h1>
    </div>
</div>

<div class="row">
	<div class="col-lg-6">
		<?php echo $message; ?>
		<form action="" method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>
			<div class="form-group">
				<input type="submit" name="add" class="btn btn-block btn-primary" value="Add">
			</div>
		</form>
	</div>
</div>