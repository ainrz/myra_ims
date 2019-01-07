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
		case 'add_criticalmass':
			include "includes/add_secB.php";
			break;

		case 'add_award':
			include "includes/add_secBaward.php";
			break;	


		default:
			include "includes/add_secBaward.php";
			break;
	}
	?>
  
</div>
    



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<?php include("includes/footer.php"); ?>  

