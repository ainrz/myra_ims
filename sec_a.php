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
			include "includes/add_staff.php";
			break;

		case 'display_info':
			include "includes/display_info.php";
			break;	
		
		default:
			include "includes/display_info.php";
			break;
	}


	 ?>
</div>

    

  
</div>

    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<?php include("includes/footer.php"); ?>  

