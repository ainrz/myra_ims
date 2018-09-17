<?php error_reporting(0); ?>

<?php 

if (isset($_GET['uid'])) {
	
	$user_id = $_GET['uid'];

	$query = "SELECT * FROM users WHERE id = $user_id";
	$select_user_query = mysqli_query($connection, $query);

	while ($row = mysqli_fetch_assoc($select_user_query)) {
	 	
		$username = $row['username'];
		$email = $row['email'];
		$password = $row['password'];
	 } 
}

$message = "";

if (isset($_POST['update'])) {
	
	$form_username = $_POST['username'];
	$form_email = $_POST['email'];
	$form_password = $_POST['password'];


	$query = "UPDATE users SET ";
	$query .= "username = '{$form_username}', ";
	$query .= "email = '{$form_email}', ";
	$query .= "password = '{$form_password}' ";
	$query .= "WHERE id = {$user_id}";

	$update_user = mysqli_query($connection, $query);

	if (!$update_user) {
		
		die("query failed" . mysqli_error($connection));
		exit();

	} else {
		$message = "<p class='bg-danger'>user updated<a href='register.php'> View user</a></p>";

		header("location:register.php?source=edit_user&uid={$user_id}");
		
		//header("location:register.php");
	}

}



 ?>











<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit user</h1>
    </div>
</div>

<div class="row">
	<div class="col-lg-6">
		<?php echo $message; ?>
		<form action="" method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control" value="<?php echo $username; ?>" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control" value="<?php echo $email; ?>" required>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" value="<?php echo $password; ?>" required>
			</div>
			<div class="form-group">
				<input type="submit" name="update" class="btn btn-primary btn-block" value="Update">
			</div>
		</form>
	</div>
</div>