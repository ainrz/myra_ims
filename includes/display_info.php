<div class="row">

	    <div class="col-lg-12">
	        <h1 class="page-header">Section A : Display info</h1>
	    </div>
	</div>

	<!-- <div class="row">
	<div class="col-lg-12">
	<p><a href="sec_a.php?source=add_staff" class="btn btn-primary">Staff</a></p>
    <div class="col-lg-12">
        <h1 class="page-header">Staff List</h1>
    </div>
</div> -->

<div class="row">
	<div class="col-lg-12">
	<p><a href="sec_a.php?source=sec_a.php" class="btn btn-primary">Staff</a></p>

	<table class="table table-bordered table-hover" id="dataTables-example">
		
		<thead>
			<tr>

				<!-- <th>id</th> -->
				<th width="12%">Staff ID</th>
				<th width="12%">Staff Name</th>
				<th width="12%">Position</th>
				<th width="12%">Grade</th>
				<th width="12%">First Appointment Date</th>
				<th width="12%">Appointment Date For Current Position</th>
				<th width="12%">Service End Date</th>
				<th width="12%">Details</th>
				<!-- <th>Date Of Birth</th>
				<th>Age</th>
				<th>Cohort</th>
				<th>Academic Qualification</th>
				<th>Profesional Qualification</th>
				<th>Registration Number for Profesional Membership</th>
				<th>Department</th>
				<th>S&T or non S&T</th>
				<th>Status 1</th>
				<th>Status 2</th>
				<th>Status 3</th>
				<th>Citizenship</th>
				<th>Country</th>
				<th>Remarks</th>
				<th>Edit</th>
				<th>Delete</th> -->
				
			</tr>
		</thead>
		<tbody>
			<?php 

			$query = "SELECT * FROM staff_sec_a";
			$select_user_query = mysqli_query($connection, $query);
			while ($row = mysqli_fetch_assoc($select_user_query)) {

				$id = $row['id'];
				$staff_id = $row['staff_id'];
				$staff_name = $row['staff_name'];
				$position = $row['position'];
				$grade = $row['grade'];
				$first_app_date = $row['first_app_date'];
				$app_date_current = $row['app_date_current'];
				$service_end_date = $row['service_end_date'];

				?>



				<tr>

					<td><?php echo htmlentities($staff_id) ?></td>
					<td><?php echo htmlentities($staff_name) ?></td>
					<td><?php echo htmlentities($position)?></td>
					<td><?php echo htmlentities($grade) ?></td>
					<td><?php echo htmlentities($first_app_date) ?></td>
					<td><?php echo htmlentities($app_date_current) ?></td>
					<td><?php echo htmlentities($service_end_date) ?></td>
					<td><a href="sec_a.php?source=display_sec_a_detail.php&id=<?php echo $id ?>">Details</a></td>

					
					
				</tr>
				<?php
			}

			 ?>
			
		</tbody>
	</table>
</div>


</div>



 