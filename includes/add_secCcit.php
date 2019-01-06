<?php 

			$message = "";
			if (isset($_POST['add'])) {
				

				$staff_id = $_POST['staff_id'];
				$staff_name = $_POST['staff_name'];
				$authors = $_POST['authors'];
				$books_title = $_POST['books_title'];
				$book_editor = $_POST['book_editor'];
				$chp_title = $_POST['chp_title'];
				$publisher = $_POST['publisher'];
				$isbn = $_POST['isbn'];
				$remarks = $_POST['remarks'];
				

				// masukkan data kt table award


				$query = "INSERT INTO citation(staff_id, staff_name, authors, books_title, book_editor, chp_title, publisher, isbn,remarks) ";

				// masukkan data kt critical_mass

				$query .= "VALUES('$staff_id', '$staff_name', '$authors', '$books_title', '$book_editor', '$chp_title', '$publisher', '$isbn', '$remarks')";

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
	        <h1 class="page-header">Section C : Publication</h1>
	    </div>
	</div>
	<div class="row">
	    <div class="col-lg-6">
	        <h3 class="page-header">Research Books</h3>

	    </div>
	</div>
	<div class="row">
	<div class="col-lg-6">
		<?php echo $message; ?>
		<form action="" method="post">
			<div class="form-group">
				<label for="staff_id">Staff ID</label>
				<input type="text" name="staff_id" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="staff_name">Staff Name</label>
				<input type="text" name="staff_name" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="authors">Authors</label>
				<input type="text" name="authors" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="books_title">Books Title</label>
				<input type="text" name="books_title" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="book_editor">Book Editor</label>
				<input type="text" name="book_editor" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="chp_title">Chapter Title</label>
				<input type="number" name="chp_title" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="publisher">Publisher</label>
				<input type="number" name="publisher" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="isbn">ISBN</label>
				<input type="number" name="isbn" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="remarks">Remarks</label>
				<input type="text" name="remarks" class="form-control" required>
			</div>
			<div class="form-group">
				<input type="submit" name="add" class="btn btn-block btn-primary" value="Add">
			</div>
		</form>
	</div>
	