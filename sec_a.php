<?php include("includes/header.php"); ?>


    <?php include("includes/navigation.php"); ?>




<div class="container">

	<?php 

	if (isset($_GET['source'])) {
		
		$source = $_GET['source'];
	} else {

		$source = "";
	}

	switch ($source) {
		case 'add_staff':
			include "includes/add_staff.php";
			break;

		case 'display_info':
			include "includes/display_info.php";
			break;	
		
		default:
			include "includes/display_info.php";
			break;
	}


	    </div>
	</div>
	<div class="row">
	<div class="col-lg-6">
		<?php echo $message; ?>
		<form action="" method="post">
			<div class="form-group">
				<label for="staff_id">Staff ID</label>
				<input type="text" name="staff_id" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="staff_name">Staff Name</label>
				<input type="text" name="staff_name" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="position">Job Position</label>
				<input type="text" name="position" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="grade">Grade (Civil Servant)</label>
				<input type="text" name="grade" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="first_app_date">First Appointment date</label>
				<input type="date" name="1st_app_date" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="app_date_current">Appointment date for current position</label>
				<input type="date" name="app_date_current" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="service_end_date">Service end date</label>
				<input type="date" name="service_end_date" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="dob">Date Of Birth</label>
				<input type="date" name="dob" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="age">Age</label>
				<input type="text" name="age" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="cohort">Cohort</label>
				<input type="text" name="cohort" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="academic_quali">Academic Qualification</label>
				<select class="form-control" name="academic_quali" required>
					<option value="">--Please select--</option>
					<option value="Degree">Degree</option>
					<option value="Master">Master</option>
					<option value="PHD">PHD</option>
				</select>
			</div>
			<div class="form-group">
				<label for="proff_quali">Profesional Qualification</label>
				<input type="text" name="proff_quali" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="reg_num">Registration number for Profesional Membership</label>
				<input type="text" name="reg_num" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="department">Department</label>
				<select class="form-control" name="department" required>
					<option value="">--Please select--</option>

	 ?>
</div>

    

  
</div>

    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<?php include("includes/footer.php"); ?>  

