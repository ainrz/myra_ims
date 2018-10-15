



<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">MyRA_IMS</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="register.php">Register new user</a></li>


                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Section <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                   <!--  <li><a href="sec_a.php">Section A</a></li> -->
                   <li class="dropdown-submenu">
                        <a tabindex="-1" href="#">Section A</a>
                        <ul class="dropdown-menu">

                          <li><a tabindex="-1" href="sec_a.php?source=add_staff">Staff</a></li>
                          <li><a tabindex="-1" href="sec_a.php?source=display_info">Display info</a></li>

                          <!-- <li class="dropdown-submenu">
                            <a href="#">More..</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">3rd level</a></li>
                                <li><a href="#">3rd level</a></li>
                            </ul>
                          </li> -->
                          <!-- <li><a href="#">Second level</a></li>
                          <li><a href="#">Second level</a></li> -->
                        </ul>
                    </li>
                    <li><a href="#">Section B</a></li>
                    <li><a href="#">Section C</a></li>
                    
                  </ul>
                </li>
                <li><a href="analytics.php">Analytics</a></li>

                

            </ul>

            <ul class="nav navbar-nav navbar-right">
     
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user']; ?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="profile.php">Profile</a></li>
                  <li><a href="./logout.php">Logout</a></li>
                  
                </ul>
              </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
        <!-- /.container -->
</nav>