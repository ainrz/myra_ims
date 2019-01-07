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
		case 'add_support':
			include "includes/add_secHsupport.php";
			break;
			
			case 'add_library':
			include "includes/add_secHlibrary.php";
			break;
			

		default:
			include "display_info.php";
			break;
	}
	?>
  
</div>
    



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<?php include("includes/footer.php"); ?>  

