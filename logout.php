<?php include "includes/db.php"; ?>
<?php session_start(); ?>
<?php session_destroy();?>


<?php

header('location:index.php');
exit();

?>
