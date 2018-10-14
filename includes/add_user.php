<?php error_reporting(0); ?>

<?php 

$message = "";
if (isset($_POST['add'])) {
	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$department= $_POST['department'];
	$staffid = $_POST['staffid'];

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


			$query = "INSERT INTO users(username, email, password, department, staffid) ";
			$query .= "VALUES('$username', '$email', '$password', '$department', '$staffid')";
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
				<label for="department">Department</label>
				<select class="form-control" name="department" required>
					<option value="">--Please select--</option>

					<option value="admin_hr">Administration & Human Resources Office</option>
					<option value="record_convo">Record & Convocation Unit</option>
					<option value="fcvac">Faculty of Communication, Visual Art & Computing</option>
					<option value="fels">Faculty of Engineering & Life Science</option>
					<option value="fess">Faculty of Education & Science Social</option>
					<option value="fba">Faculty of Business & Accountancy</option>
					<option value="grad_stu">Centre of Graduate Studies</option>
					<option value="bursar">Bursar Office</option>
					<option value="coe">Centre of Excellent</option>
					<option value="library">Unisel Library</option>
				</select>
			</div>
			
			<div class="form-group">
				<label for="staffid">StaffID</label>
				<input type="text" name="staffid" class="form-control" required>
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