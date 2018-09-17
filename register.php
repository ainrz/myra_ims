<?php include("includes/header.php"); ?>


    <?php include("includes/navigation.php"); ?>

<div class="container">

	

	<?php 

	if(isset($_GET['source'])){
                            
    	$source = $_GET['source'];
    
	}else{
	    
	    $source ='';
	}
	switch($source){
	        case 'add_user';
	        include "includes/add_user.php";
	        break;
	        
	        case 'edit_user';
	        include "includes/edit_user.php";
	        break;
	        
	        case '200';
	        echo 'nice 200';
	        
	    default:
	        include "includes/view_all_users.php";
	        break;
	        
	}



	 ?>

    

  
</div>

    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<?php include("includes/footer.php"); ?>  