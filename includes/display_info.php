<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">Section A : Display info</h1>
	    </div>
	</div>

	<div class="row">
	<div class="col-lg-12">
	<p><a href="sec_a.php?source=add_staff" class="btn btn-primary">Staff</a></p>
	<table class="table table-bordered table-hover" id="dataTables-example">
		
		<thead>
			<tr>
				<th>id</th>
				<th>Staff ID</th>
				<th>Staff Name</th>
				<th>Position</th>
				<th>grade</th>
				<th>first appointment date</th>
				<th>Appointment date for current position</th>
				<th>Service end date</th>
				<th>Date Of Birth</th>
				<th>Age</th>
				<th>Cohort</th>
				<th>Academic Qualification</th>
				<th>Profesional Qualification</th>
				<th>Registration number for Profesional Membership</th>
				<th>Department</th>
				<th>S&T or non S&T</th>
				<th>Status 1</th>
				<th>Status 2</th>
				<th>Status 3</th>
				<th>Citizenship</th>
				<th>Country</th>
				<th>Remarks</th>
				
			</tr>
		</thead>
		<tbody>
			<?php 
			$query = "SELECT * FROM staffs";
			$select_user_query = mysqli_query($connection, $query);
			while ($row = mysqli_fetch_assoc($select_user_query)) {?>

				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['staff_id']; ?></td>
					<td><?php echo $row['staff_name']; ?></td>
					<td><?php echo $row['position']; ?></td>
					<td><?php echo $row['grade']; ?></td>
					<td><?php echo $row['first_app_date']; ?></td>
					<td><?php echo $row['app_date_current']; ?></td>
					<td><?php echo $row['service_end_date']; ?></td>
					<td><?php echo $row['dob']; ?></td>
					<td><?php echo $row['age']; ?></td>
					<td><?php echo $row['cohort']; ?></td>
					<td><?php echo $row['academic_quali']; ?></td>
					<td><?php echo $row['proff_quali']; ?></td>
					<td><?php echo $row['department']; ?></td>
					<td><?php echo $row['st_nonst']; ?></td>
					<td><?php echo $row['status_1']; ?></td>
					<td><?php echo $row['status_2']; ?></td>
					<td><?php echo $row['status_3']; ?></td>
					<td><?php echo $row['citizenship']; ?></td>
					<td><?php echo $row['country']; ?></td>
					<td><?php echo $row['remarks']; ?></td>
					<!-- <td><a href="register.php?source=edit_user&uid=<?php //echo $row['id']; ?>">edit</a></td>
					<td><a onClick="javascript: return confirm('Are you sure you want to delete?');" href="register.php?delete=<?php //echo $row['id']; ?>">delete</a></td> -->
				</tr>
				<?php
			}
			 ?>
			
		</tbody>
	</table>
</div>

</div>

<script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
 </script>
