
<?php 

if (isset($_GET['id'])) {
	$id = $_GET['id'];
} else {
	$id = "";
}


 ?>


<div class="row">

	    <div class="col-lg-12">
	        <h1 class="page-header">Section A : Display info</h1>
	    </div>
	</div>



<div class="row">
	<div class="col-lg-12">
	<p><a href="sec_a.php?source=display_info.php" class="btn btn-primary">Back</a></p>

	<table class="table table-bordered table-hover">
			<tbody>
				<?php 

				$query = "SELECT * FROM staff_sec_a WHERE id=$id";
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
				$dob = $row['dob'];
				$age = $row['age'];
				$cohort = $row['cohort'];
				$academic_quali = $row['academic_quali'];
				$proff_quali = $row['proff_quali'];
				$reg_num = $row['reg_num'];
				$department = $row['department'];
				$st_nonst = $row['st_nonst'];
				$status_1 = $row['status_1'];
				$status_2 = $row['status_2'];
				$status_3 = $row['status_3'];
				$citizenship = $row['citizenship'];
				$country = $row['country'];
				$remarks = $row['remarks'];
				$doc = $row['doc'];

				?>



				<tr>
					<th width="40%">Staff ID</th>
					<td><?php echo $staff_id ?></td>
				</tr>
				<tr>
					<th>Staff Name</th>
					<td><?php echo $staff_name ?></td>
				</tr>
				<tr>
					<th>Position</th>
					<td><?php echo $position ?></td>
				</tr>
				<tr>
					<th>Grade</th>
					<td><?php echo $grade ?></td>
				</tr>
				<tr>
					<th>First Appointment Date</th>
					<td><?php echo $first_app_date ?></td>
				</tr>
				<tr>
					<th>Appointment Date For Current Position</th>
					<td><?php echo $app_date_current ?></td>
				</tr>
				<tr>
					<th>Service End Date</th>
					<td><?php echo $service_end_date ?></td>
				</tr>
				<tr>
					<th>Date Of Birth</th>
					<td><?php echo $dob ?></td>
				</tr>
				<tr>
					<th>Age</th>
					<td><?php echo $age ?></td>
				</tr>
				<tr>
					<th>Cohort</th>
					<td><?php echo $cohort ?></td>
				</tr>
				<tr>
					<th>Academic qualification</th>
					<td><?php echo $academic_quali ?></td>
				</tr>
				<tr>
					<th>Profesional qualification</th>
					<td><?php echo $proff_quali ?></td>
				</tr>
				<tr>
					<th>Register number</th>
					<td><?php echo $reg_num ?></td>
				</tr>
				<tr>
					<th>Department</th>
					<td><?php echo $department ?></td>
				</tr>
				<tr>
					<th>St & Non ST</th>
					<td><?php echo $st_nonst ?></td>
				</tr>
				<tr>
					<th>Status 1</th>
					<td><?php echo $status_1 ?></td>
				</tr>
				<tr>
					<th>Status 2</th>
					<td><?php echo $status_2 ?></td>
				</tr>
				<tr>
					<th>status 3</th>
					<td><?php echo $status_3 ?></td>
				</tr>
				<tr>
					<th>Citizenship</th>
					<td><?php echo $citizenship ?></td>
				</tr>
				<tr>
					<th>Country</th>
					<td><?php echo $country ?></td>
				</tr>
				<tr>
					<th>Remarks</th>
					<td><?php echo $remarks ?></td>
				</tr>
				<tr>
					<th>Edit</th>
					<td><a href="sec_a.php?source=edit_staff&edit=<?php echo $id; ?>">Edit</a></td>
				</tr>
				<tr>
					<th>Delete</th>
					<td><a href="sec_a.php?source=delete_staff">Delete</a></td>
				</tr>

				
				<?php
			}


				 ?>
				
			</tbody>
		</table>
		<p><a class="btn btn-primary" href="includes/downloadFile.php?id=<?php echo $id ?>">Download File</a></p>

<!-- <p><a class="btn btn-primary" href="uploads/<?php echo $doc ?>" target="_blank">Download</a></p> -->
</div>


</div>



 