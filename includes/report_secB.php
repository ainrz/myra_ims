
<?php 

if (isset($_GET['id'])) {
	$id = $_GET['id'];
} else {
	$id = "";
}


 ?>


<div class="row">

	    <div class="col-lg-12">
	        <h1 class="page-header">Section B : Display info</h1>
	    </div>
	</div>



<div class="row">
	<div class="col-lg-12">
	<p><a href="sec_b.php?source=display_secB.php" class="btn btn-primary">Back</a></p>

	<table class="table table-bordered table-hover">
			<tbody>
				<?php 

				$query = "SELECT * FROM citical_mass WHERE id=$id";
			$select_user_query = mysqli_query($connection, $query);
			while ($row = mysqli_fetch_assoc($select_user_query)) {

				$id = $row['id'];
				$project_id = $row['project_id'];
				$staff_id = $row['staff_id'];
				$staff_name = $row['staff_name'];
				$fac = $row['fac'];
				$st_nonst = $row['st_nonst'];
				$research_titlle = $row['research_titlle'];
				$start_date = $row['start_date'];
				$end_date = $row['end_date'];
				$yr_duration = $row['yr_duration'];
				$sponsor = $row['sponsor'];
				$sponsor_categry = $row['sponsor_categry'];
				$grant_name = $row['grant_name'];
				$amnt_pldg = $row['amnt_pldg'];
				$amnt_recvd = $row['amnt_recvd'];
				$amnt_spend = $row['amnt_spend'];
				$remarks = $row['remarks'];
				

				?>



				<tr>
					<th width="40%">Project ID</th>
					<td><?php echo $project_id ?></td>
				</tr>
				<tr>
					<th>Staff ID</th>
					<td><?php echo $staff_id ?></td>
				</tr>
				<tr>
					<th>Staff Name</th>
					<td><?php echo $staff_name ?></td>
				</tr>
				<tr>
					<th>Faculty</th>
					<td><?php echo $fac ?></td>
				</tr>
				<tr>
					<th>ST & Non ST</th>
					<td><?php echo $st_nonst ?></td>
				</tr>
				<tr>
					<th>Research Title</th>
					<td><?php echo $research_titlle ?></td>
				</tr>
				<tr>
					<th>Start Date</th>
					<td><?php echo $start_date ?></td>
				</tr>
				<tr>
					<th>End Date</th>
					<td><?php echo $end_date ?></td>
				</tr>
				<tr>
					<th>Year Duration</th>
					<td><?php echo $yr_duration ?></td>
				</tr>
				<tr>
					<th>Sponsor</th>
					<td><?php echo $sponsor ?></td>
				</tr>
				<tr>
					<th>Sponsor Category</th>
					<td><?php echo $sponsor_categry ?></td>
				</tr>
				<tr>
					<th>Grant Name</th>
					<td><?php echo $grant_name ?></td>
				</tr>
				<tr>
					<th>Amount Pledge</th>
					<td><?php echo $amnt_pldg ?></td>
				</tr>
				<tr>
					<th>Amount Recieved</th>
					<td><?php echo $amnt_recvd ?></td>
				</tr>
				<tr>
					<th>Amount Spend</th>
					<td><?php echo $amnt_spend ?></td>
				</tr>
				
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

<p><a class="btn btn-primary" href="uploads/<?php echo $doc ?>" target="_blank">Download</a></p>
</div>


</div>



 