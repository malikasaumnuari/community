<?php

require_once 'db_connect.php';

// check if user is not logged in
if(empty($_SESSION['id_user'])) {
    header('location:index.php');
    exit();
}

if(isset($_SESSION['id_user'])) { ?>


<?php
$id_user = $_SESSION['id_user'];

$sql =mysqli_query($connect, "SELECT * FROM users WHERE id_user = $id_user");
$sqll = mysqli_fetch_array($sql)

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bogor Community in Action | Home </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

 <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><img src="images/bcia.png" height="50px" widht="50px"> <span>BCiA</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $sqll['username'] ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                <li><a><i class="fa fa-calendar"></i>Reminder<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <?php
                            $con=mysqli_connect("127.0.0.1","root","","bogor_community");
                            
                            if (mysqli_connect_errno())
                            {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }

                              $sql = mysqli_query($con,"SELECT * FROM communities C , agendas a WHERE  a.id_community=C.id_community AND C.active = 2 AND a.active=3 AND C.id_master='$id_user'");            
                              if($sql->num_rows > 0) {
                              while ( $row = mysqli_fetch_assoc( $sql ) )
                            {
                            echo " <li><a>".$row['name_community']."<span class='fa fa-chevron-down'></span></a>
                                    <ul class='nav child_menu'>
                                  <li><a href='com-sche.php?id_community=".$row['id_community']."'>".$row['name_agenda']."</a></li></ul></li>
                            ";

                            $no++;
                            }
                          } else { echo "<li><a href=#>There are no active schedule yet!</a></li>";}
                            

                            mysqli_close($con);
                            ?>
                            </ul>
              
                </li>
                  <li><a><i class="fa fa-group"></i>Your Community<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a>Owned Communities<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                    <?php
                            $con=mysqli_connect("127.0.0.1","root","","bogor_community");
                            
                            if (mysqli_connect_errno())
                            {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }

                              $sql = mysqli_query($con,"SELECT * FROM communities C , users U WHERE C.id_master= U.id_user AND C.active = 2 AND C.id_master = '$id_user'");            
                              if($sql->num_rows > 0) {
                              while ( $row = mysqli_fetch_assoc( $sql ) )
                            {
                            echo "
                                  <li><a href='com-front.php?id_community=".$row['id_community']."'>".$row['name_community']."</a></li>
                            ";

                            $no++;
                            }
                            echo "<li><a href='com-create.php'>See all</a></li>";
                          } else { echo "<li>No communities owned yet!</li>";}
                            

                            mysqli_close($con);
                            ?>
                            </ul>
                            <li><a href="user-join.php">See all joined communities</a></li>
                    </ul>
                  </li>
                  <li><a href="f-n-commu.php" style="color: white"> <i class="fa fa-plus-circle"> </i>Create new community</a></li>
                </ul>
                  <br>
                  <br>


              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->

            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/user.png" alt=""><?php echo $sqll['username'] ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="userprofile.php"> Profile</a></li>

                    <li><a href="login_user/logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
<!--start here-->
        <!-- page content -->

<!--navigation-->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            </div>
              <h3><?php echo $sqll['username']; ?>'s Profile</h3>
            <div class="clearfix"></div>

            <div class="row">
                  <div class="x_content">
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="x_panel">

                    <div class="profile_img" align="center" col-md-4 col-sm-6 col-xs-6>
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img src="images/user.png" alt="<?php echo $sqll['username']; ?>-user" col-md-4 col-sm-6 col-xs-6>
                        </div>
                      </div>

            <div class="x_title">

            </div>
              <ul class="list-unstyled">
                <li>
                  <a href="userjoin.php" type="button" class="btn btn-default col-md-12 col-sm-12 col-xs-12" >Joined Communities</a>
                </li>
                <li>
                  <a href="usercreate.php" type="button" class="btn btn-default col-md-12 col-sm-12 col-xs-12" >Created Communities</a>
                </li>
                <li>
              </ul>
            </div>
        </div>

<!--content-->

                <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">
                    <div class="x_title">
                    <h2>Profile</h2>
                    <ul class="nav navbar-right panel_toolbox">
                          <li><a href="useredit.php"><i class="fa fa-edit"></i>Edit Profile</a>
                          </li>

                        </ul>
                    <div class="clearfix"></div>
                  </div>

   <ul class="list-unstyled user_data">
                        <li>

                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="col-md-4 col-md-4 col-xs-12">
                              <h4>Name</h4>
                            </div>
                            <div class"col-md-8 col-md-8 col-xs-12">
                              <h4><?php echo $sqll['name']; ?></h4>
                            </div>
                          </div>
                        </li>

                        <li>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="col-md-4 col-md-4 col-xs-12">
                              <h4>Date of Birth</h4>
                            </div>
                            <div class"col-md-8 col-md-8 col-xs-12">
                              <h4><?php echo $sqll['date_birth']; ?></h4>
                            </div>
                          </div>
                        </li>

                        <li>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="col-md-4 col-md-4 col-xs-12">
                              <h4>Gender</h4>
                            </div>
                            <div class"col-md-8 col-md-8 col-xs-12">
                              <h4><?php echo $sqll['gender']; ?></h4>
                            </div>
                          </div>
                        </li>

                        <li>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="col-md-4 col-md-4 col-xs-12">
                              <h4>Email</h4>
                            </div>
                            <div class"col-md-8 col-md-8 col-xs-12">
                              <h4><?php echo $sqll['email']; ?></h4>
                            </div>
                          </div>
                        </li>

                        <li>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="col-md-4 col-md-4 col-xs-12">
                              <h4>Contact</h4>
                            </div>
                            <div class"col-md-8 col-md-8 col-xs-12">
                              <h4>0<?php echo $sqll['contact']; ?></h4>
                            </div>
                          </div>
                        </li>

                        <li>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="col-md-4 col-md-4 col-xs-12">
                              <h4>Address</h4>
                            </div>
                            <div class"col-md-8 col-md-8 col-xs-12">
                              <h4><?php echo $sqll['address']; ?></h4>
                            </div>
                          </div>
                        </li>
                      </ul>

                  </div>

</div>
</div>


                </div>
                      <!-- end of skills -->

                    </div>
                    </div>






              </div>
            </div>
          </div>
        </div>

        <!-- /page content -->



        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Bogor Community in Action - Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>

<?php
}
?>
