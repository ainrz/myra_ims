<?php 

			$message = "";
			if (isset($_POST['add'])) {
				

				$pub_yr = $_POST['pub_yr'];
				$doc_title = $_POST['doc_title'];
				$authors = $_POST['authors'];
				$issn = $_POST['issn'];
				$vol = $_POST['vol'];
				$issue = $_POST['issue'];
				$page_start = $_POST['page_start'];
				$page_end = $_POST['page_end'];
				$year = $_POST['year'];
				$issn_isbn= $_POST['issn_isbn'];
				$remarks = $_POST['remarks'];
				

				// masukkan data kt table award


				$query = "INSERT INTO books(pub_yr, doc_title, authors, issn, vol, issue, page_start, page_end, year, issn_isbn, remarks) ";

				// masukkan data kt critical_mass

				$query .= "VALUES('$pub_yr', '$doc_title', '$authors', '$issn', '$vol', '$issue', '$issn_isbn', '$remarks')";

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
	        <h3 class="page-header">Publication Citation</h3>

	    </div>
	</div>
	<div class="row">
	<div class="col-lg-6">
		<?php echo $message; ?>
		<form action="" method="post">
			<div class="form-group">
				<label for="pub_yr">Publication Year</label>
				<input type="text" name="pub_yr" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="doc_title">Document Title</label>
				<input type="text" name="doc_title" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="authors">Authors</label>
				<input type="text" name="authors" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="issn">ISSN</label>
				<input type="text" name="issn" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="source_title">Source Title</label>
				<input type="text" name="source_title" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="vol">Volume</label>
				<input type="number" name="vol" class="form-control" required>
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
	