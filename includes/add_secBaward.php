<?php 

			$message = "";
			if (isset($_POST['add'])) {
				

				$staff_id = $_POST['staff_id'];
				$staff_name = $_POST['staff_name'];
				$fac = $_POST['fac'];
				$name_award = $_POST['name_award'];
				$type_award = $_POST['type_award'];
				$confer_body = $_POST['confer_body'];
				$title_invention = $_POST['title_invention'];
				$event = $_POST['event'];
				$date_add = $_POST['date_add'];
				$remarks = $_POST['remarks'];
				$document = $_POST['document'];
				

				// masukkan data kt table critical_mass


				$query = "INSERT INTO Award(staff_id, staff_name, fac, name_award, type_award, confer_body, title_invention, event, date_add, remarks, document) ";

				// masukkan data kt critical_mass

				$query .= "VALUES('$staff_id', '$staff_name', '$fac', '$name_award', '$type_award', '$confer_body', '$title_invention', '$event', '$date_add','$remarks', '$document')";

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
	        <h1 class="page-header">Section B : Quantity And Quality Of Researchers</h1>
	    </div>
	</div>
	<div class="row">
	    <div class="col-lg-6">
	        <h3 class="page-header">Award</h3>

	    </div>
	</div>
	<div class="row">
	<div class="col-lg-6">
		<?php echo $message; ?>
		<form action="" method="post">
			<div class="form-group">
				<label for="staff_id">Staff ID</label>
				<input type="text" name="stafft_id" class="form-control" required>
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
				<label for="name_award">Name of Award</label>
				<input type="text" name="name_award" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="type_award">Type of Award</label>
				<select class="form-control" name="type_award" required>
					<option value="">--Please select--</option>
					<option value="recognition">Recognition</option>
					<option value="stewardship">Stewardship</option>
				</select>
			</div>
			<div class="form-group">
				<label for="confer_body">Confering Body</label>
				<input type="text" name="confer_body" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="title_invention">Title of Invention</label>
				<input type="text" name="title_invention" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="event">Event</label>
				<input type="text" name="event" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="date_add">Date</label>
				<input type="date" name="date_add" class="form-control" required>
			</div>
			
			<div class="form-group">
				<label for="remarks">Remarks</label>
				<input type="text" name="remarks" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="remarks">Award</label>
				<input type="file" name="file" class="form-control" required>
			</div>
			<div class="form-group">
				<input type="submit" name="add" class="btn btn-block btn-primary" value="Add">
			</div>
		</form>
	</div>
	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="text-center">
					
					<h1>Award</h1>
				</div>