



<nav class="navbar navbar-default
 navbar-fixed-top" role="navigation">
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
                


                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Section <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                   <!--  <li><a href="sec_a.php">Section A</a></li> -->

                   <!-- if admin -->

                   <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>

                    
                   <li class="dropdown-submenu">
                        <a tabindex="-1" href="#">Section A</a>
                        <ul class="dropdown-menu">

                          <li><a tabindex="-1" href="sec_a.php?source=add_staff">Staff</a></li>
                          <li><a tabindex="-1" href="sec_a.php?source=add_student">Undergraduate Student</a></li>
                          <li><a tabindex="-1" href="sec_a.php?source=add_pgstudent">Postgraduate Student</a></li>
                  

                         
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a tabindex="-1" href="#">Section B</a>
                        <ul class="dropdown-menu">

                          <li><a tabindex="-1" href="sec_b.php?source=add_criticalmass">Critical Mass</a></li>
                          <li><a tabindex="-1" href="sec_b.php?source=add_award">Award</a></li>
                         
                 
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a tabindex="-1" href="#">Section C</a>
                        <ul class="dropdown-menu">

                          <li><a tabindex="-1" href="sec_c.php?source=add_publication">Publication</a></li>
                          <li><a tabindex="-1" href="sec_c.php?source=add_books">Citation</a></li>
                          <li><a tabindex="-1" href="sec_c.php?source=add_citation">Books</a></li>
                         
                 
                        </ul>
                    </li>
                    <li><a href="#">Section D</a></li>
                    <li><a href="#">Section E</a></li>
                    <li><a href="#">Section G</a></li>
                    <li><a href="#">Section H</a></li>
                    </ul>

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Report <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="sec_a.php?source=display_info">Section A</a></li>
                        <li><a href="sec_b.php?source=display_info">Section B</a></li>
                        <li><a href="sec_c.php?source=display_info">Section C</a></li>
                        <li><a href="sec_d.php?source=display_info">Section D</a></li>
                        <li><a href="sec_e.php?source=display_info">Section E</a></li>
                        <li><a href="sec_g.php?source=display_info">Section G</a></li>
                        <li><a href="sec_h.php?source=display_info">Section H</a></li>
                   
                      </ul>
                    </li>
                    <li><a href="register.php">Register new user</a></li>
                    <li><a href="analytics.php">Analytics</a></li>


                    <?php elseif($_SESSION['role'] == 'hr'): ?>

                      <li class="dropdown-submenu">
                        <a tabindex="-1" href="#">Section A</a>
                        <ul class="dropdown-menu">

                          <li><a tabindex="-1" href="sec_a.php?source=add_staff">Staff</a></li>
                          <li><a tabindex="-1" href="sec_a.php?source=display_info">Display info</a></li>

                          <li><a tabindex="-1" href="sec_a.php">Staff</a></li>

                         
                        </ul>
                    </li>

                    <?php elseif($_SESSION['role'] == 'convo'): ?>

                      <li><a href="#">Section B</a></li>
                      <li><a href="#">Section D</a></li>
                      <li><a href="#">Section E</a></li>

                         
                        </ul>
                    </li>

                    <?php elseif($_SESSION['role'] == 'fac'): ?>

                      <li><a href="#">Section C</a></li>


                    <?php elseif($_SESSION['role'] == 'grad'): ?>

                      <li><a href="#">Section D</a></li>
                      <li><a href="#">Section E</a></li>

                    <?php elseif($_SESSION['role'] == 'bursar'): ?>

                      <li><a href="#">Section G</a></li>

                    <?php elseif($_SESSION['role'] == 'lib'): ?>

                      <li><a href="#">Section H</a></li>
                      
                    <?php endif; ?>
                    
                  </ul>
                </li>

                

                

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