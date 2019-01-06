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
		case 'add_publication':
			include "includes/add_secCpub.php";
			break;

		case 'add_books':
			include "includes/add_secCbooks.php";
			break;

		case 'add_citation':
			include "includes/add_secCcit.php";
			break;		


		default:
			include "includes/add_secBaward.php";
			break;
	}
	?>
  
</div>
    



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<?php include("includes/footer.php"); ?>  

