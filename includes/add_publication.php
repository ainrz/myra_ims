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
	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="text-center">
					<img src="https://t4.ftcdn.net/jpg/01/16/06/45/240_F_116064582_KlXENacGmdt4xl8H6fQRYfSZLntLNKSX.jpg" class="rounded">
					<h1>Publication</h1>
				</div>