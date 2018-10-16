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
<hr>
<?php 
$query = "SELECT * FROM staffs";
			$select_user_query = mysqli_query($connection, $query);
			while ($row = mysqli_fetch_assoc($select_user_query)){
	?>


<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-body">
			<div class="row">
				<div class="col-lg-3">
					<img src="https://t4.ftcdn.net/jpg/01/16/06/45/240_F_116064582_KlXENacGmdt4xl8H6fQRYfSZLntLNKSX.jpg" width="200" height="200" class="rounded">
				</div>
				<div class="col-lg-8">
					<p><b>id</b>: <?php echo $row['id']; ?></p>
					<p>staff id: <?php echo $row['staff_id']; ?></p>
					<p>staff name: <?php echo $row['staff_name']; ?></p>
					<p>position: <?php echo $row['position']; ?></p>
					<p>grade: <?php echo $row['grade']; ?></p>
					<p>first appplication date: <?php echo $row['first_app_date']; ?></p>
					<p>application date current: <?php echo $row['app_date_current']; ?></p>
					<p>service end date: <?php echo $row['service_end_date']; ?></p>
					<p>date of birth: <?php echo $row['dob']; ?></p>
					<p>age: <?php echo $row['age']; ?></p>
					<p>cohort: <?php echo $row['cohort']; ?></p>
					<p>academic qualification: <?php echo $row['academic_quali']; ?></p>
					<p>proffessional qualification: <?php echo $row['proff_quali']; ?></p>
					<p>department: <?php echo $row['department']; ?></p>
					<p>status nonst: <?php echo $row['st_nonst']; ?></p>
					<p>status 1: <?php echo $row['status_1']; ?></p>
					<p>status 2: <?php echo $row['status_2']; ?></p>
					<p>status 3: <?php echo $row['status_3']; ?></p>
					<p>citizenship: <?php echo $row['citizenship']; ?></p>
					<p>country: <?php echo $row['country']; ?></p>
					<p>remarks: <?php echo $row['remarks']; ?></p>
					<hr>
					<p>
						<a href="#" class="btn btn-primary">Delete</a>
						<a href="#" class="btn btn-success">Edit</a>
					</p>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
<?php
}
?>

<script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
 </script>
