<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">User List</h1>
    </div>
</div>

<div class="row">
	<div class="col-lg-8">
	<p><a href="register.php?source=add_user" class="btn btn-primary">Register user</a></p>
	<table class="table table-bordered table-hover" id="dataTables-example">
		
		<thead>
			<tr>
				<th>username</th>
				<th>email</th>
				<th>edit</th>
				<th>delete</th>
			</tr>
		</thead>
		<tbody>
			<?php 

			$query = "SELECT * FROM users";
			$select_user_query = mysqli_query($connection, $query);

			while ($row = mysqli_fetch_assoc($select_user_query)) {?>

				<tr>
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><a href="register.php?source=edit_user&uid=<?php echo $row['id']; ?>">edit</a></td>
					<td><a onClick="javascript: return confirm('Are you sure you want to delete?');" href="register.php?delete=<?php echo $row['id']; ?>">delete</a></td>
				</tr>
				<?php
			}

			 ?>
			
		</tbody>
	</table>
</div>
<!-- <div class="col-lg-4">
	<div class="well well-sm">Senarai pelajar yang didaftar</div>
</div>
</div>
 -->
<?php 

if (isset($_GET['delete'])) {
	
	$user_id = mysqli_real_escape_string($connection, $_GET['delete']);
        
    $query = "DELETE FROM users WHERE id = $user_id ";
    $delete_query = mysqli_query($connection, $query);
    
    header("Location: register.php");
}





 ?>

 <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
 </script>