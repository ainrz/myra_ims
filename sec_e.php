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
		case 'add_patents':
			include "includes/add_secEpatents.php";
			break;
			

		default:
			include "display_info.php";
			break;
	}
	?>
  
</div>
    



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<?php include("includes/footer.php"); ?>  

