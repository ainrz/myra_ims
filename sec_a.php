<?php include("includes/header.php"); ?>


    <?php include("includes/navigation.php"); ?>


    <?php 

    $message = "";












     ?>

<div class="container">

	

	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">Section A</h1>
	    </div>
	</div>

	<div class="row">
	<div class="col-lg-6">
		<?php echo $message; ?>
		<form action="" method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="department">Department</label>
				<select class="form-control" name="department" required>
					<option value="">--Please select--</option>

					<option value="admin_hr">Administration & Human Resources Office</option>
					<option value="record_convo">Record & Convocation Unit</option>
					<option value="fcvac">Faculty of Communication, Visual Art & Computing</option>
					<option value="fels">Faculty of Engineering & Life Science</option>
					<option value="fess">Faculty of Education & Science Social</option>
					<option value="fba">Faculty of Business & Accountancy</option>
					<option value="grad_stu">Centre of Graduate Studies</option>
					<option value="bursar">Bursar Office</option>
					<option value="coe">Centre of Excellent</option>
					<option value="library">Unisel Library</option>
				</select>
			</div>
			
			<div class="form-group">
				<label for="staffid">StaffID</label>
				<input type="text" name="staffid" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>
			<div class="form-group">
				<input type="submit" name="add" class="btn btn-block btn-primary" value="Add">
			</div>
		</form>
	</div>
</div>

    

  
</div>

    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<?php include("includes/footer.php"); ?>  

