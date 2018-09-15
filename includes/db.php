<?php 



$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="db_myra";



$connection=mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$connection) {
	die("connect failure" . mysqli_error($connection));
} else {
	// echo "connected";
}




 ?>