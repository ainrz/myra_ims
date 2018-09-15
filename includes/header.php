<?php ob_start(); //output buffer...penting..xde nie leh error?> 
<?php include "db.php"; //db terlibat?>



<?php session_start(); //session nie penting utk login?>

<?php 

if (strlen($_SESSION['user']) == 0) {
   header("location:login.php"); // kalau session 0 atau set 0 die akan redirect ke login.php...security purpose
}

 ?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">


  </head>
  <body>

  