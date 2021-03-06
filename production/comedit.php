<?php

require_once 'db_connect.php';

// check if user is not logged in
if(empty($_SESSION['id_community'])) {
    header('location:index.php');
    exit();
}

if(isset($_SESSION['id_community'])) { ?>


<?php
$id_community = $_SESSION['id_community'];

$sql =mysqli_query($connect, "SELECT * FROM communities WHERE id_community = $id_community");
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
              <a href="index.html" class="site_title"><img src="images/bcia.png" height="50px" widht="50px"> <span>BCiA</span></a>
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
                <ul class="nav side-menu">
                <li><a><i class="fa fa-calendar"></i>Reminder<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                  <li><a>You have no reminders!</a></li>
                </ul>
                </li>
                  <li><a><i class="fa fa-group"></i>Your Community<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">Dramaga Golf Club</a></li>
                      <li><a href="projects.html">INARI</a></li>
                      <li><a href="project_detail.html">EMULSI</a></li>
                      <li><a href="contacts.html">Gacha Ampas Club (GAC)</a></li>
                      <li><a href="com-yes.html">The Ghostbusters</a></li>
                      <li><a href="user-joined.html">See all</a></li>
                    </ul>
                  </li>
                  <li><a href="f-n-commu.html" style="color: white"> <i class="fa fa-plus-circle"> </i>Create new community</a></li>
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
                    <img src="images/user.png" alt=""><?php echo $result['username'] ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="user-profile.html"> Profile</a></li>

                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
<!--start here-->
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            </div>

            <div class="clearfix"></div>

            <div class="row">
                  <div class="x_content">
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="x_panel">

                    <div class="profile_img" align="center" col-md-4 col-sm-6 col-xs-6>
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img src="images/user.png" alt="commu-avatar" col-md-4 col-sm-6 col-xs-6>
                        </div>
                      </div>

            <div class="x_title">

            <h3 align="center">The Ghostbusters</h3>
            </div>
              <ul class="list-unstyled">
                <li>
                  <a href="com-yes.html" type="button" class="btn btn-default col-md-12 col-sm-12 col-xs-12" >View Profile</a>
                </li>
                <li>
                  <a href="com-yes-memb.html" type="button" class="btn btn-default col-md-12 col-sm-12 col-xs-12" >View Members</a>
                </li>
                <li>
                  <a href="com-yes-sche.html" type="button" class="btn btn-default col-md-12 col-sm-12 col-xs-12" >View Schedules</a>
                </li>
                <li>
                  <a href="com-yes-thread.html" type="button" class="btn btn-default col-md-12 col-sm-12 col-xs-12">View Thread</a>
                </li>
              </ul>
            </div>
        </div>

<!--content-->

                <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">
                    <div class="x_title">
                    <h2>Edit Community Profile</h2>
                    <div class="clearfix"></div>
                  </div>

              <form action="communities/changeprofileprosescom.php" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                <div class="clearfix"></div>
                <ul class="list-unstyled user_data">
                        <li>
                          <div class="form-group col-md-12 col-sm-12 col-xs-12">
                              <label class="control-label col-md-4 col-sm-4 col-xs-12" for="com-name"><h4>Community Name</h4> <span class="required"></span>
                              </label>
                              <div class="col-md-8 col-sm-8 col-xs-12">
                                <input type="text" name="name_community" id="com-name" class="form-control col-md-7 col-xs-12" value="<?php echo $result['name_community']; ?>">
                              </div>
                            </div>

                        </li>
                        <li>
                          <div class="form-group col-md-12 col-sm-12 col-xs-12">
                              <label class="control-label col-md-4 col-sm-4 col-xs-12" for="category"><h4>Category</h4> <span class="required"></span>
                              </label>
                              <div id="category" class="col-md-6 col-sm-6 col-xs-12" name="category">
                                <select class="form-control">
                                  <option value="<?php echo $result['category']; ?>">Choose option</option>
                                  <option value="sport">Sports</option>
                                  <option value="lifestyle">Lifestyle</option>
                                  <option value="education">Education</option>
                                  <option value="entertain">Entertainment</option>
                                  <option value="hobbies">Hobbies</option>
                                  <option value="arts">Arts</option>
                                </select>
                              </div>
                            </div>
                        </li>

                        <li>
                          <div class="form-group col-md-12 col-sm-12 col-xs-12">
                              <label class="control-label col-md-4 col-sm-4 col-xs-12" for="address"><h4>Address</h4> <span class="required"></span>
                              </label>
                              <div class="col-md-8 col-sm-8 col-xs-12">
                                <input type="text" id="address" class="form-control col-md-7 col-xs-12" value=<?php echo $result['address']; ?>>
                              </div>
                            </div>
                        </li>


                        <li>
                          <div class="form-group col-md-12 col-sm-12 col-xs-12">
                              <label class="control-label col-md-4 col-sm-4 col-xs-12" for="about"><h4>About</h4> <span class="required"></span>
                              </label>
                              <div class="col-md-8 col-sm-8 col-xs-12">
                                <input type="text" id="about" class="form-control col-md-7 col-xs-12" value="<?php echo $result['about']; ?>">
                              </div>
                            </div>
                        </li>
                      </ul>

                      &nbsp;


                      <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12" align="center">
                          <a href="user-profile.html" class="btn btn-danger" type="button">Cancel</a>
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                      </div>

                    </form>

                                              <div class="ln_solid"></div>

                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                          &nbsp;
                          <ul class="list-unstyled user_data">
                                  <li>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="profpic"><h4>Change Picture</h4>
                                        </label>
                                        <div class="btn-group col-md-8 col-sm-8 col-xs-12">
                                          <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                                        </div>
                                      </div>

                                  </li>
                          </ul>

                          <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12" align="center">
                              <a href="user-profile.html" class="btn btn-danger" type="button">Cancel</a>
                              <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                          </div>
                        </form>

                  </div>

</div>
</div>


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
