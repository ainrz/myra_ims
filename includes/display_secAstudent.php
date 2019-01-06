<div class="row">

	    <div class="col-lg-12">
	        <h1 class="page-header">Section A : Display info</h1>
	    </div>
	</div>



<div class="row">
	<div class="col-lg-12">
	<p><a href="sec_a.php?source=sec_a.php" class="btn btn-primary">Undergaduate Student</a></p>

	<table class="table table-bordered table-hover" id="dataTables-example">
		
		<thead>
			<tr>

				
				<th width="25%">Matric Number</th>
				<th width="25%">Student Name</th>
				<th width="25%">Faculty</th>
				<th width="25%">Details</th>
				
				
			</tr>
		</thead>
		<tbody>
			<?php 

			$query = "SELECT * FROM ug_student";
			$select_user_query = mysqli_query($connection, $query);
			while ($row = mysqli_fetch_assoc($select_user_query)) {

				$id = $row['id'];
				$matric_num = $row['matric_num'];
				$stud_name = $row['stud_name'];
				$fac = $row['fac'];
				

				?>



				<tr>

					<td><?php echo htmlentities($id) ?></td>
					<td><?php echo htmlentities($matric_num) ?></td>
					<td><?php echo htmlentities($stud_name)?></td>
					<td><?php echo htmlentities($fac) ?></td>
					<td><a href="sec_a.php?source=display_sec_a_detail.php&id=<?php echo $id ?>">Details</a></td>

					
					
				</tr>
				<?php
			}

			 ?>
			
		</tbody>
	</table>
</div>


</div>



 