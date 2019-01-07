<?php 

			$message = "";
			if (isset($_POST['add'])) {
				

				$type = $_POST['type'];
				$collection_name = $_POST['collection_name'];
				$title = $_POST['title'];
				$volume = $_POST['volume'];
				
				

				// masukkan data kt table award


				$query = "INSERT INTO library(type, collection_name, title, volume) ";

				// masukkan data kt critical_mass

				$query .= "VALUES('$type' ,'$collection_name', '$title', '$volume')";

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
	        <h1 class="page-header">Section H :Facilities</h1>
	    </div>
	</div>
	<div class="row">
	    <div class="col-lg-6">
	        <h3 class="page-header">Library Facilities</h3>

	    </div>
	</div>
	<div class="row">
	<div class="col-lg-6">
		<?php echo $message; ?>
		<form action="" method="post">
			<div class="form-group">
				<label for="type">Type</label>
				<input type="text" name="type" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="collection_name">Collection Name</label>
				<input type="text" name="collection_name" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="volume">Volume</label>
				<input type="text" name="volume" class="form-control" required>
			</div>
			</div>
			<div class="form-group">
				<input type="submit" name="add" class="btn btn-block btn-primary" value="Add">
			</div>
		</form>
	</div>
