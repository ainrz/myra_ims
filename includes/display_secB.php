<div class="row">

	    <div class="col-lg-12">
	        <h1 class="page-header">Section B</h1>
	    </div>
	</div>



<div class="row">
	<div class="col-lg-12">
	<p><a href="sec_b.php?source=sec_b.php" class="btn btn-primary">Critical Mass</a></p>

	<table class="table table-bordered table-hover" id="dataTables-example">
		
		<thead>
			<tr>

				
				<th width="25%">Project ID</th>
				<th width="25%">Staff Id</th>
				<th width="25%">Staff Name</th>
				<th width="25%">Faculty</th>
				<th width="25%">Details</th>
				
				
			</tr>
		</thead>
		<tbody>
			<?php 

			$query = "SELECT * FROM citical_mass";
			$select_user_query = mysqli_query($connection, $query);
			while ($row = mysqli_fetch_assoc($select_user_query)) {

				$id = $row['id'];
				$project_id = $row['project_id'];
				$staff_id = $row['staff_id'];
				$staff_name = $row['staff_name'];
				$fac = $row['fac'];
				

				?>



				<tr>

					<td><?php echo htmlentities($project_id) ?></td>
					<td><?php echo htmlentities($staff_id)?></td>
					<td><?php echo htmlentities($staff_name) ?></td>
					<td><?php echo htmlentities($fac) ?></td>
					<td><a href="sec_b.php?source=report_secB&id=<?php echo $id ?>">Details</a></td>

					
					
				</tr>
				<?php
			}

			 ?>
			
		</tbody>
	</table>
</div>


</div>



 