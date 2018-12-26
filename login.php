<?php session_start(); ?>
<?php error_reporting(0); ?>



<?php include("includes/db.php"); ?>
<?php include("functions.php"); ?>
<?php 
 
$message = ""; 

if (isset($_POST['login'])){

    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    if (empty($username) || empty($password)) {
        
        //$message = "<p class='bg-danger'>Username or password is empty</p>";
        set_message("Username or password is empty");
    } else {

        $query = "SELECT * FROM users "; //concatinate query nak bagi nampak kemas
        $query .= "WHERE username = '$username' ";
        $query .= "AND password = '$password'";

        $login_query = mysqli_query($connection, $query);

        if (!$login_query) {
            die("query error" . mysqli_error($connection));
            exit();
        }

        //looping utk set variable..

        while ($row = mysqli_fetch_assoc($login_query)) {
            
            $db_id = $row['id'];
            $db_role= $row['role'];
            $db_username = $row['username'];
            $db_email = $row['email'];
            $db_password = $row['password'];

        }

        //$row = mysqli_fetch_array($login_query);

        //check username and password yg ade kt dalam database.

        if ($username === $db_username && $password === $db_password) {
            
            $_SESSION['id'] = $db_id;
            $_SESSION['role'] = $db_role;
            $_SESSION['user'] = $db_username;
            $_SESSION['email'] = $db_email;

            header("location:index.php");

        } else {

            //$message = "<p class='bg-danger'>incorrect password or username</p>";
            set_message("incorrect password or username");
        }


       
    }
 
    
}





?>







<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="./css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="./css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="./css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css">

        
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                        	<?php display_message(); ?>
                            <form action="" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="username" name="username" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                
                                    <div class="form-group">
                                        <input class="btn btn-lg btn-block btn-success" name="login" type="submit">
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="./js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="./js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="./js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="./js/startmin.js"></script>

    </body>
</html>
