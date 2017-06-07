<?php

require_once 'login_user/db_connect.php';
session_start();

// check if user is not logged in
if(empty($_SESSION['id_user'])) {
    header('location:index.php');
    exit();
}

if(isset($_SESSION['id_user'])) { ?>


<?php
$id_user = $_SESSION['id_user'];

$sql = "SELECT * FROM users WHERE id_user = $id_user";
$query = $connect->query($sql);
$result = $query->fetch_array();

// close database connection
$connect->close();

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
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>BCiA</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $result['username'] ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Reminder</h3>
                <br>
                <p>You have no reminders!</p>
                <br>
              </div>
              <div class="menu_section">
                <h3>Your Community</h3>
                <ul class="nav side-menu">
                      <li><a href="e_commerce.html">
                      Dramaga Golf Club</a></li>
                      <li><a href="projects.html">INARI</a></li>
                      <li><a href="project_detail.html">EMULSI</a></li>
                      <li><a href="contacts.html">Gacha Ampas Club (GAC)</a></li>
                      <li><a href="com-yes.html">The Ghostbusters</a></li>
                    </ul>
                  <br>
                  <br>
                  <h3><a href="f-n-commu.php" style="color: white"> <i class="fa fa-plus-circle"> </i>Create new community</a> </h3>

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
                    <img src="images/user.png" alt="">
                    <?php echo $result['username'] ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="user-profile.html"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login_user/logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

          <!-- top tiles -->
            <!--search box-->

          <!-- /top tiles -->
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">
                <div class="title_left">
                <h1>Top 3 Communities</h1>
                </div>


              <div class="row">
              <div class="col-md-12">

                  <div class="x_content">
                  <div class="row">

                                            <div class="clearfix"></div>
                                              <div class="clearfix"></div>

                <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <div class="left col-xs-7">
                              <h2>Anti-Social Social Club</h2>
                              <p><strong>About: </strong> Sesama ansos merapat yuk </p>
                              <ul class="list-unstyled">
                                <li> Admin: <a href="profile.html">ampash</a></li>
                                <li> Kategori: Lifestyle </li>
                                <li><i class="fa fa-user"></i> 718 </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="images/user.png" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                              <a type="button" class="btn btn-info btn-xs" href="com-no.html">
                              View Community </a>
                              <a type="button" class="btn btn-primary btn-xs" href="f-j-commu.html">
                               Join!</a>
                          </div>
                        </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <div class="left col-xs-7">
                              <h2>The Ghostbusters</h2>
                              <p><strong>About: </strong> Komunitas pemburu hantu bogor </p>
                              <ul class="list-unstyled">
                                <li> Admin: <a href="profile.html">dunialain</a></li>
                                <li> Kategori: Sports </li>
                                <li><i class="fa fa-user"></i> 666 </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="images/user.png" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                               <a type="button" class="btn btn-info btn-xs" href="com-yes.html">
                              View Community </a>
                              <a type="button" class="btn btn-primary btn-xs" href="f-j-commu.html">
                               Join!</a>
                          </div>
                        </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <div class="left col-xs-7">
                              <h2>Bogor Body</h2>
                              <p><strong>About: </strong> Komunitas bodybuilding paling macho </p>
                              <ul class="list-unstyled">
                                <li> Admin: <a href="profile.html">yOGSZzz</a></li>
                                <li> Kategori: Sports </li>
                                <li><i class="fa fa-user"></i> 288 </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="images/user.png" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                              <a type="button" class="btn btn-info btn-xs" href="com-no.html">
                              View Community </a>
                              <a type="button" class="btn btn-primary btn-xs" href="f-j-commu.html">
                               Join!</a>
                          </div>
                        </div>
                </div>
                </div>

              </div>
            </div>
            </div>
          </div>
        </div>
          <div class="clearfix"></div>
        </br>



<!--other-->
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="dashboard_graph">
                    <h3> Other Communities</h3>
                    <!--search-->
                                <div class="title_right">
                                  <div class="col-md-10 col-sm-12 col-xs-12 form-group pull-left top_search">
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Search for...">
                                      <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                      </span>
                                  </div>
                                </div>
                                </div>
                                <div class="clearfix"></div>
              <div class="row">
              <div class="col-md-12">
                  <div class="x_content">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <ul class="pagination pagination-split">
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                          <li>...</li>
                          <li><a href="#">22</a></li>
                          <li><a href="#">23</a></li>
                          <li><a href="#">24</a></li>
                          <li><a href="#">25</a></li>
                        </ul>
                      </div>

                      <div class="clearfix"></div>

                      <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <div class="left col-xs-7">
                              <h2>Cibinong Debate Club</h2>
                              <p><strong>About: </strong> Klub debat asli cibinong </p>
                              <ul class="list-unstyled">
                                <li> Admin: <a href="profile.html">richigga</a></li>
                                <li> Kategori: Education </li>
                                <li><i class="fa fa-user"></i> 199 </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="images/user.png" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                             <a type="button" class="btn btn-info btn-xs" href="com-no.html">
                              View Community </a>
                              <a type="button" class="btn btn-primary btn-xs" href="f-j-commu.html">
                               Join!</a>

                          </div>
                        </div>
                      </div>

                      <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <div class="left col-xs-7">
                              <h2>Cibinong Debate Club</h2>
                              <p><strong>About: </strong> Klub debat asli cibinong </p>
                              <ul class="list-unstyled">
                                <li> Admin: <a href="profile.html">richigga</a></li>
                                <li> Kategori: Education </li>
                                <li><i class="fa fa-user"></i> 199 </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="images/user.png" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                              <a type="button" class="btn btn-info btn-xs" href="com-no.html">
                              View Community </a>
                              <a type="button" class="btn btn-primary btn-xs" href="f-j-commu.html">
                               Join!</a>

                          </div>
                        </div>
                      </div>

                      <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <div class="left col-xs-7">
                              <h2>Cibinong Debate Club</h2>
                              <p><strong>About: </strong> Klub debat asli cibinong </p>
                              <ul class="list-unstyled">
                                <li> Admin: <a href="profile.html">richigga</a></li>
                                <li> Kategori: Education </li>
                                <li><i class="fa fa-user"></i> 199 </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="images/user.png" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                          <a type="button" class="btn btn-info btn-xs" href="com-no.html">
                              View Community </a>
                              <a type="button" class="btn btn-primary btn-xs" href="f-j-commu.html">
                               Join!</a>

                          </div>
                        </div>
                      </div>

                      <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <div class="left col-xs-7">
                              <h2>Cibinong Debate Club</h2>
                              <p><strong>About: </strong> Klub debat asli cibinong </p>
                              <ul class="list-unstyled">
                                <li> Admin: <a href="profile.html">richigga</a></li>
                                <li> Kategori: Education </li>
                                <li><i class="fa fa-user"></i> 199 </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="images/user.png" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                              <a type="button" class="btn btn-info btn-xs" href="com-no.html">
                              View Community </a>
                              <a type="button" class="btn btn-primary btn-xs" href="f-j-commu.html">
                               Join!</a>

                          </div>
                        </div>
                      </div>

                      <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <div class="left col-xs-7">
                              <h2>Cibinong Debate Club</h2>
                              <p><strong>About: </strong> Klub debat asli cibinong </p>
                              <ul class="list-unstyled">
                                <li> Admin: <a href="profile.html">richigga</a></li>
                                <li> Kategori: Education </li>
                                <li><i class="fa fa-user"></i> 199 </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="images/user.png" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                              <a type="button" class="btn btn-info btn-xs" href="com-no.html">
                              View Community </a>
                              <a type="button" class="btn btn-primary btn-xs" href="f-j-commu.html">
                               Join!</a>

                          </div>
                        </div>
                      </div>

                      <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <div class="left col-xs-7">
                              <h2>Cibinong Debate Club</h2>
                              <p><strong>About: </strong> Klub debat asli cibinong </p>
                              <ul class="list-unstyled">
                                <li> Admin: <a href="profile.html">richigga</a></li>
                                <li> Kategori: Education </li>
                                <li><i class="fa fa-user"></i> 199 </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="images/user.png" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                              <a type="button" class="btn btn-info btn-xs" href="com-no.html">
                              View Community </a>
                              <a type="button" class="btn btn-primary btn-xs" href="f-j-commu.html">
                               Join!</a>

                          </div>
                        </div>
                      </div>
                      </div>
                    </div>

        <!-- /page content -->



        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
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