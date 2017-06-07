<?php

require_once 'db_connect.php';

// check if user is not logged in
if(empty($_SESSION['id_user'])) {
    header('home.php');
    exit();
}

if(isset($_SESSION['id_user'])) {


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
              <a href="index.php" class="site_title"><img src="images/bcia.png" height="50px" widht="50px"> <span>BCiA</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                    <?php
                        if(file_exists("images/$id_user.jpg"))
                            $fileName = "$id_user.jpg";
                        else if(file_exists("images/$id_user.jpeg"))
                            $fileName = "$id_user.jpeg";
                        else if(file_exists("images/$id_user.gif"))
                            $fileName = "$id_user.gif";
                        else if(file_exists("images/$id_user.png"))
                            $fileName = "$id_user.png";
                        else if(file_exists("images/$id_user.JPG"))
                            $fileName = "$id_user.JPG";
                        else
                            $fileName = "user.png";
                    ?>
                <img src="images/<?php echo $fileName;?>" alt="..." class="img-circle profile_img">
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
                    <?php
                        if(file_exists("images/$id_user.jpg"))
                            $fileName = "$id_user.jpg";
                        else if(file_exists("images/$id_user.jpeg"))
                            $fileName = "$id_user.jpeg";
                        else if(file_exists("images/$id_user.gif"))
                            $fileName = "$id_user.gif";
                        else if(file_exists("images/$id_user.png"))
                            $fileName = "$id_user.png";
                        else if(file_exists("images/$id_user.JPG"))
                            $fileName = "$id_user.JPG";
                        else
                            $fileName = "user.png";
                    ?>
                <img src="images/<?php echo $fileName;?>" alt="...">

                    <?php echo $result['username'] ?>
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

                <?php
                            $con=mysqli_connect("127.0.0.1","root","","bogor_community");
                            
                            if (mysqli_connect_errno())
                            {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }

                            
                            
                            $result = mysqli_query($con,"SELECT * FROM communities C JOIN users U WHERE U.id_user=C.id_master AND active = 2 LIMIT 3");


                            while($row = mysqli_fetch_array($result))
                            {
                                        $id_community1 = $row['id_community'];
                                        

                                        $result1 = mysqli_query($con,"SELECT count(id_member) AS countmember FROM communities c JOIN members_community m WHERE m.active = 2 AND c.id_community = {$id_community1} AND c.id_community=m.id_community ORDER BY countmember" );
                                         while ($row1=mysqli_fetch_array($result1))
                                         {


                                        
                                        
                                      
                            echo "


                            <div class='col-md-4 col-sm-4 col-xs-12 profile_details'>
                              <div class='well profile_view'>
                                <div class='col-sm-12'>
                                  <div class='left col-xs-7'>
                                    <h2><strong>".$row['name_community']."</strong></h2>
                                    <p><strong>About: </strong> ".$row['about']." </p>
                                    <ul class='list-unstyled'>
                                      <li> Admin: ".$row['username']."</a></li>
                                      <li> Kategori: ".$row['category']." </li>
                                      <li><i class='fa fa-user'></i> ".$row1['countmember']." </li>
                                    </ul>
                                  </div>
                                  <div class='right col-xs-5 text-center'>
                                    <img src='images/com.png' alt='' class='img-circle img-responsive'>
                                  </div>
                                </div>
                                <div class='col-xs-12 bottom text-center'>
                                   <a type='button' class='btn btn-info btn-xs' href='com-front.php?id_community=".$row['id_community']." '>
                                    View Community </a>


                                </div>
                              </div>
                            </div>

                            ";
                            }
                            }
                            mysqli_close($con);
                            ?>

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
                                  <form name="formcari" method="post" action="search.php">
                                    <div class="input-group">
                                    
                                      <input type="text" name="cari" class="form-control" placeholder="Search for...">
                                      <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit">Go!</button>
                                      </span>
                                  </div>
                                  </form>
                                </div>
                                </div>
                                <div class="clearfix"></div>
              <div class="row">
              <div class="col-md-12">
                  <div class="x_content">
                    <div class="row">
                      

                      <div class="clearfix"></div>
                      <div class="clearfix"></div>


                      <?php
                            $con=mysqli_connect("127.0.0.1","root","","bogor_community");
                            
                            if (mysqli_connect_errno())
                            {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }

                              $batas = 6;
                              $pg = isset( $_GET['pg'] ) ? $_GET['pg'] : "";
                               
                              if ( empty( $pg ) ) {
                              $posisi = 0;
                              $pg = 1;
                              } else {
                              $posisi = ( $pg - 1 ) * $batas;
                              }
                               
                              $sql = mysqli_query($con,"SELECT * FROM communities C JOIN users U WHERE U.id_user=C.id_master AND active = 2 LIMIT $posisi, $batas");
                              $no = 1+$posisi;
                              

                              $sql = mysqli_query($con,"SELECT * FROM communities C JOIN users U WHERE U.id_user=C.id_master AND active = 2 LIMIT $posisi, $batas");
                              $no = 1+$posisi;
                              while ( $row = mysqli_fetch_assoc( $sql ) )
                              {
                               $id_community1 = $row['id_community'];
                                        

                                        $result1 = mysqli_query($con,"SELECT count(id_member) AS countmember FROM communities c JOIN members_community m WHERE m.active = 2 AND c.id_community = {$id_community1} AND c.id_community=m.id_community");
                                         while ($row1=mysqli_fetch_array($result1))
                                         {

                            echo "


                            <div class='col-md-4 col-sm-4 col-xs-12 profile_details'>
                              <div class='well profile_view'>
                                <div class='col-sm-12'>
                                  <div class='left col-xs-7'>
                                    <h2>".$row['name_community']."</h2>
                                    <p><strong>About: </strong> ".$row['about']." </p>
                                    <ul class='list-unstyled'>
                                      <li> Admin: <a href='profile.html'>".$row['username']."</a></li>
                                      <li> Kategori: ".$row['category']." </li>
                                      <li><i class='fa fa-user'></i> ".$row1['countmember']." </li>
                                    </ul>
                                  </div>
                                  <div class='right col-xs-5 text-center'>
                                    <img src='images/com.png' alt='' class='img-circle img-responsive'>
                                  </div>
                                </div>
                                <div class='col-xs-12 bottom text-center'>
                                   <a type='button' class='btn btn-info btn-xs' href='com-front.php?id_community=".$row['id_community']." '>
                                    View Community </a>

                                </div>
                              </div>
                            </div>

                            ";
                                }
                            $no++;
                            }
                            

                            mysqli_close($con);
                            ?>


<div class="col-md-12 col-sm-12 col-xs-12 text-center">
<ul class="pagination pagination-split">
                                
                              
                      
<?php
//hitung jumlah data
$con=mysqli_connect("127.0.0.1","root","","bogor_community");
$sql = mysqli_query($con,"SELECT * FROM communities WHERE active=2");
$jml_data = mysqli_num_rows($sql);
//Jumlah halaman
$JmlHalaman = ceil($jml_data/$batas); //ceil digunakan untuk pembulatan keatas
 
//Navigasi ke sebelumnya
if ( $pg > 1 ) {
$link = $pg-1;
$prev = "<li> <a href='?pg=$link'>Sebelumnya </a></li>";
} else {
$prev = "<li><a>Sebelumnya</a></li>";
}
 
//Navigasi nomor
$nmr = '';
for ( $i = 1; $i<= $JmlHalaman; $i++ ){
 
if ( $i == $pg ) {
$nmr .= "<li> <a>$i</a> </li>";
} else {
$nmr .= "<li> <a href='?pg=$i'>$i</a> </li>";
}
}
 
//Navigasi ke selanjutnya
if ( $pg < $JmlHalaman ) {
$link = $pg + 1;
$next = "<li> <a href='?pg=$link'>Selanjutnya</a><li>";
} else {
$next = "<li><a>Selanjutnya</a></li>";
}
 
//Tampilkan navigasi
echo $prev . $nmr . $next;
?>

</ul>
</div>
        <!-- /page content -->



        <!-- footer content -->
        
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