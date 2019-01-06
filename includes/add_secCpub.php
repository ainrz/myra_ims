<?php 

			$message = "";
			if (isset($_POST['add'])) {
				

				$article_id = $_POST['article_id'];
				$staff_id = $_POST['staff_id'];
				$staff_name = $_POST['staff_name'];
				$co_author = $_POST['co_author'];
				$author = $_POST['author'];
				$pub_category = $_POST['pub_category'];
				$doc_title = $_POST['doc_title'];
				$source_title = $_POST['source_title'];
				$page_start = $_POST['page_start'];
				$page_end= $_POST['page_end'];
				$year = $_POST['year'];
				$issn_isbn = $_POST['issn_isbn'];
				$remarks = $_POST['remarks'];
				

				// masukkan data kt table award


				$query = "INSERT INTO publication(article_id, staff_id, staff_name, co_author, author, pub_category, doc_title, source_title, page_start, page_end, year, issn_isbn, remarks) ";

				// masukkan data kt critical_mass

				$query .= "VALUES('$article_id' ,'$staff_id', '$staff_name', '$co_author', '$author', '$pub_category', '$doc_title', 'source_title', '$page_start', '$page_end', '$year','$issn_isbn', '$remarks')";

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
	        <h3 class="page-header">Publication</h3>

	    </div>
	</div>
	<div class="row">
	<div class="col-lg-6">
		<?php echo $message; ?>
		<form action="" method="post">
			<div class="form-group">
				<label for="article_id">Article ID</label>
				<input type="text" name="article_id" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="staff_id">Staff ID</label>
				<input type="text" name="stafft_id" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="staff_name">Staff Name</label>
				<input type="text" name="staff_name" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="co_author">Co-Author</label>
				<input type="text" name="co_author" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="author">Author</label>
				<input type="text" name="author" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="pub_category">Publication Category</label>
				<select class="form-control" name="pub_category" required>
					<option value="">--Please select--</option>
					<option value="non_index">Non-Index</option>
					<option value="policy">Policy</option>
					<option value="oths_pub">Other Publication</option>
				</select>
			</div>
			<div class="form-group">
				<label for="doc_title">Document Title</label>
				<input type="text" name="doc_title" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="source_title">Source Title</label>
				<input type="text" name="source_title" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="volume">Volume</label>
				<input type="number" name="volume" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="issue">Issue</label>
				<input type="number" name="issue" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="page_start">Page Start</label>
				<input type="number" name="page_start" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="page_end">Page End</label>
				<input type="number" name="page_end" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="year">Year</label>
				<input type="number" name="year" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="issn_isbn">ISSN or ISBN</label>
				<input type="number" name="issn_isbn" class="form-control" required>
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
