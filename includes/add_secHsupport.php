<?php 

			$message = "";
			if (isset($_POST['add'])) {
				

				$research_fac = $_POST['research_fac'];
				$location = $_POST['location'];
				$fac = $_POST['fac'];
				$academic_staff = $_POST['academic_staff'];
				$type_acc = $_POST['type_acc'];
				$reg_num = $_POST['reg_num'];
				$award_body = $_POST['award_body'];
				$start_date = $_POST['start_date'];
				$expiry_date= $_POST['expiry_date'];
				$remarks = $_POST['remarks'];
				

				// masukkan data kt table award


				$query = "INSERT INTO support_facilities(research_fac, location, fac, academic_staff, type_acc, reg_num, award_body, start_date, expiry_date, remarks) ";

				// masukkan data kt critical_mass

				$query .= "VALUES('$research_fac' ,'$location', '$fac', '$academic_staff', '$type_acc', '$reg_num', '$award_body', 'start_date', '$expiry_date', '$remarks')";

				$update_user = mysqli_query($connection, $query);

				if (!$update_user) {
					die("query failed" . mysqli_error($connection));
					exit();
				} else {

					$message = "<p class='bg-danger'>Award added<a href='sec_a.php?source=view_staff'> View UG Student</a></p>";
				}
					
			}
		?>
<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">Section H :Facilities</h1>
	    </div>
	</div>
	<div class="row">
	    <div class="col-lg-6">
	        <h3 class="page-header">Support Facilities</h3>

	    </div>
	</div>
	<div class="row">
	<div class="col-lg-6">
		<?php echo $message; ?>
		<form action="" method="post">
			<div class="form-group">
				<label for="research_fac">Research Facility</label>
				<input type="text" name="research_fac" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="location">Location</label>
				<input type="text" name="location" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="fac">Department</label>
				<select class="form-control" name="fac" required>
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
				<label for="academic_staff">Academic Staff</label>
				<input type="text" name="academic_staff" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="type_acc">Type of Accrediatation</label>
				<input type="text" name="type_acc" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="reg_num">Register Number</label>
				<input type="text" name="reg_num" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="award_body">Awarding Body</label>
				<input type="text" name="award_body" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="start_date">Start Date</label>
				<input type="date" name="start_date" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="expiry_date">Expiry Date</label>
				<input type="date" name="expiry_date" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="remarks">Remarks</label>
				<input type="text" name="remarks" class="form-control" required>
			</div>
			<div class="form-group">
				<input type="submit" name="add" class="btn btn-block btn-primary" value="Add">
			</div>
		</form>
	</div>
