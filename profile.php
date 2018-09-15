

<?php include("includes/header.php"); ?>



<?php include("includes/navigation.php"); ?>

<?php 

$message = "";
if(isset($_POST['update'])){

                                        
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($username) || empty($email) || empty($password)) {
    	
    	$message = "<p class='bg-danger'>Username, email or password is empty</p>";
    } else {

    	$query = "UPDATE users SET username = '$username', ";
	    $query .= "email = '$email', ";
	    $query .= "password = '$password' ";
	    $query .= "WHERE username = '".$_SESSION['user']."'";


	    $update_query = mysqli_query($connection, $query);
	    
	    if(!$update_query){
	        
	        die("query failed". mysqli_error($connection));
	        exit();
	    }

	    $message = "<p class='bg-success'>Updated</p>";
    }

    
}


$query = "SELECT * FROM users WHERE id = '".$_SESSION['id']."'";
$sql = mysqli_query($connection, $query);

$row = mysqli_fetch_assoc($sql);

$username = $row['username'];
$email = $row['email'];
$password = $row['password'];








 ?>

<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Profile</h1>
        </div>
    </div>

    <div class="row">
    	<div class="col-lg-6">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				Update Profile
    			</div>

    			<div class="panel-body">
    				<?php echo $message; ?>
    				<form action="" method="post">
    					<div class="form-group">
    						<label for="username">Username</label>
    						<input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
    					</div>
    					<div class="form-group">
    						<label for="email">Email</label>
    						<input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
    					</div>
    					<div class="form-group">
    						<label for="password">Password</label>
    						<input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
    					</div>
    					<div class="form-group">
    						<input type="submit" name="update" class="btn btn-primary btn-block" value="Update">
    					</div>
    				</form>

    			</div>
    		</div>
    	</div>


    	<div class="col-lg-4">
    		<div class="well well-sm">Updated profile section</div>
    	</div>
    </div>

  
</div>


<?php include("includes/footer.php"); ?>
