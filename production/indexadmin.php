<?php

require_once 'db_connect.php';

// check if user is not logged in
if(empty($_SESSION['id_admin'])) {
    header('location:admins/login.php');
    exit();
}

if(isset($_SESSION['id_admin'])) {

$_SESSION['admin'] = $_SESSION['id_admin'];

$id_admin = $_SESSION['id_admin'];

$sql = "SELECT * FROM admins WHERE id_admin = $id_admin";
$query = $connect->query($sql);
$result = $query->fetch_array();

$connect->close();




// close database connection


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin | Home</title>

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
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>BCiA</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $result['username_admin'] ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="indexadmin.php"><i class="fa fa-home" ></i> DASHBOARD</a></li>
                  <li><a><i class="fa fa-user"></i> USERS<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                      <li><a href="6 Admin - List User.php">USERS</a></li>
                      <li><a href="8 Admin - List Master Admin.php">MASTER ADMIN</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i> COMMUNITY<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                      <li><a href="7 Admin - List Community.php">APPROVED COMMUNITY</a></li>
                      <li><a href="9 Admin - List Community Pending.php">PENDING COMMUNITY</a></li>
                    </ul>
                  </li>

                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->


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
                    <img src="images/img.jpg" alt=""><?php echo $result['username_admin'] ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="login_user/logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">

          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="col-md-6 col-sm-6 col-xs-12" style="font-size:40px">

                <div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count">
                  <span class="count_top"><i class="fa fa-user"></i><small> Total Users</small></span>
                  <?php
                            $con=mysqli_connect("127.0.0.1","root","","bogor_community");
                            
                            if (mysqli_connect_errno())
                            {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }

                              $sql = mysqli_query($con,"SELECT COUNT(id_user) AS jumlah FROM users");
                              while ( $row = mysqli_fetch_assoc( $sql ) )
                            {
                            echo "
                                  
                                  <div class='count'>".$row['jumlah']."</div>
                            ";
                            }
                            

                            mysqli_close($con);
                            ?>
                  
                  <br>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12" style="font-size:40px">
                <div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count">
                  <span class="count_top"><i class="fa fa-users"></i><small>Total Community</small></span>
                  <?php
                            $con=mysqli_connect("127.0.0.1","root","","bogor_community");
                            
                            if (mysqli_connect_errno())
                            {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }

                              $sql = mysqli_query($con,"SELECT COUNT(id_community) AS jumlah FROM communities");
                              while ( $row = mysqli_fetch_assoc( $sql ) )
                            {
                            echo "
                                  
                                  <div class='count'>".$row['jumlah']."</div>
                            ";
                            }
                            

                            mysqli_close($con);
                            ?>
                  <br>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12" style="font-size:40px">
                <div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count">
                  <span class="count_top"><i class="fa fa-users"></i><small>Community Pending</small></span>
                  <?php
                            $con=mysqli_connect("127.0.0.1","root","","bogor_community");
                            
                            if (mysqli_connect_errno())
                            {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }

                              $sql = mysqli_query($con,"SELECT COUNT(id_community) AS jumlah FROM communities WHERE active=1");
                              while ( $row = mysqli_fetch_assoc( $sql ) )
                            {
                            echo "
                                  
                                  <div class='count'>".$row['jumlah']."</div>
                            ";
                            }
                            

                            mysqli_close($con);
                            ?>
                  <br>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12" style="font-size:40px">
                <div class="col-md-12 col-sm-12 col-xs-12 tile_stats_count">
                  <span class="count_top"><i class="fa fa-users"></i><small>Community Approved</small></span>
                  <?php
                            $con=mysqli_connect("127.0.0.1","root","","bogor_community");
                            
                            if (mysqli_connect_errno())
                            {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }

                              $sql = mysqli_query($con,"SELECT COUNT(id_community) AS jumlah FROM communities WHERE active=2");
                              while ( $row = mysqli_fetch_assoc( $sql ) )
                            {
                            echo "
                                  
                                  <div class='count'>".$row['jumlah']."</div>
                            ";
                            }
                            

                            mysqli_close($con);
                            ?>
                  <br>
                </div>
              </div>


                <div class="clearfix"></div>
              </div>
            </div>

          <br />





        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
             <a href="https://"></a>
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
