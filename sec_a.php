<?php include("includes/header.php"); ?>


    <?php include("includes/navigation.php"); ?>


<div class="container">

	<?php 

	if (isset($_GET['source'])) {
		
		$source = $_GET['source'];
	} else {

		$source = "";
	}

	switch ($source) {
		case 'add_staff':
			include "includes/add_secAstaff.php";
			break;
		case 'add_student':
			include "includes/add_secAstudent.php";
			break;
		case 'add_pgstudent':
			include "includes/add_secApgstudent.php";
			break;
		case 'edit_staff':
			include "includes/edit_secAstaff.php";
			break;
		case 'display_info':
			include "includes/display_info.php";
			break;

		case 'display_sec_a_detail':
			include "includes/display_sec_a_detail.php";
			break;		
		
		default:
			include "includes/display_info.php";
			break;
	}
	?>
  
</div>
    



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<?php include("includes/footer.php"); ?>  

