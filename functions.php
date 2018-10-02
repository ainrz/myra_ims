<?php 

function set_message($message) {

	if (!empty($message)) {
		$_SESSION['message'] = $message;
	} else {
		$message = "";
	}
}



function display_message() {

	if (isset($_SESSION['message'])) {
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
}













 ?>