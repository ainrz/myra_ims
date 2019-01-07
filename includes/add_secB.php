<?php 

			$message = "";
			if (isset($_POST['add'])) {
				

				$project_id = $_POST['project_id'];
				$staff_id = $_POST['staff_id'];
				$staff_name = $_POST['staff_name'];
				$fac = $_POST['fac'];
				$st_nonst = $_POST['st_nonst'];
				$research_titlle = $_POST['research_titlle'];
				$start_date = $_POST['start_date'];
				$end_date = $_POST['end_date'];
				$yr_duration = $_POST['yr_duration'];
				$sponsor = $_POST['sponsor'];
				$sponsor_categry = $_POST['sponsor_categry'];
				$grant_name = $_POST['grant_name'];
				$amnt_pldg = $_POST['amnt_pldg'];
				$amnt_recvd = $_POST['amnt_recvd'];
				$amnt_spend = $_POST['amnt_spend'];
				$remarks = $_POST['remarks'];
				

				// masukkan data kt table critical_mass


				$query = "INSERT INTO citical_mass(project_id, staff_id, staff_name, fac, st_nonst, research_titlle, start_date, end_date, yr_duration, sponsor, sponsor_categry, grant_name, amnt_pldg, amnt_recvd, amnt_spend, remarks) ";

				// masukkan data kt critical_mass

				$query .= "VALUES('$project_id', '$staff_id', '$staff_name', '$fac', '$st_nonst', '$research_titlle', '$start_date', '$end_date', '$yr_duration', '$sponsor', '$sponsor_categry', '$grant_name', '$amnt_pldg', '$amnt_recvd', '$amnt_spend', 'remarks')";

				$update_user = mysqli_query($connection, $query);

				if (!$update_user) {
					die("query failed" . mysqli_error($connection));
					exit();
				} else {

					$message = "<p class='bg-danger'>Critical Mass added<a href='sec_b.php?source=display_secB'> View Critical Mass</a></p>";
				}
					
			}
		?>



<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">Section B : Quantity And Quality Of Researchers</h1>
	    </div>
	</div>
	<div class="row">
	    <div class="col-lg-6">
	        <h3 class="page-header">Critical Mass</h3>

	    </div>
	</div>
	<div class="row">
	<div class="col-lg-6">
		<?php echo $message; ?>
		<form action="" method="post">
			<div class="form-group">
				<label for="project_id">Project ID</label>
				<input type="text" name="project_id" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="staff_id">Staff ID</label>
				<input type="text" name="staff_id" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="staff_name">Staff Name</label>
				<input type="text" name="staff_name" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="fac">Faculty</label>
				<select class="form-control" name="fac" required>
					<option value="">--Please select--</option>
					<option value="fcvac">Faculty of Communication, Visual Art & Computing</option>
					<option value="fels">Faculty of Engineering & Life Science</option>
					<option value="fess">Faculty of Education & Science Social</option>
					<option value="fba">Faculty of Business & Accountancy</option>
				</select>
			</div>
			<div class="form-group">
				<label for="st_nonst">S&T or non S&T</label>
				<select class="form-control" name="st_nonst" required>
					<option value="">--Please select--</option>
					<option value="st">S&T</option>
					<option value="nonst">non S&T</option>
				</select>
			</div>
			<div class="form-group">
				<label for="research_titlle">Research Title</label>
				<input type="text" name="research_titlle" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="start_date">Start date</label>
				<input type="date" name="start_date" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="end_date">End date</label>
				<input type="date" name="end_date" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="yr_duration">Year of duration</label>
				<input type="number" name="yr_duration" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="sponsor">Sponsor</label>
				<input type="text" name="sponsor" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="sponsor_categry">Sponsor cateroy</label>
				<select class="form-control" name="sponsor_categry" required>
					<option value="">--Please select--</option>
					<option value="uni">University</option>
					<option value="national">National</option>
					<option value="prvt">Private</option>
					<option value="intrnationl">International</option>
				</select>
			</div>
			<div class="form-group">
				<label for="grant_name">Grant name</label>
				<input type="text" name="grant_name" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="amnt_pldg">Amount pledged</label>
				<input type="text" name="amnt_pldg" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="amnt_recvd">Amount received</label>
				<input type="text" name="amnt_recvd" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="amnt_spend">Amount spend</label>
				<input type="text" name="amnt_spend" class="form-control" required>
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
