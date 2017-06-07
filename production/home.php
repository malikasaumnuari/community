<?php

require_once 'db_connect.php';

if(isset($_SESSION['id_user'])){
  header('location:index.php');
  exit();
}
else if(isset($_SESSION['id_admin'])){
  header('location:indexadmin.php');
  exit();
}
?>

<!DOCTYPE html>
<html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url("images/bgfrontpg.jpg");
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("/w3images/parallax2.jpg");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("/w3images/parallax3.jpg");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<head>
    <title>Bogor Community in Action</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->

  </head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button"><i class="fa fa-home"></i>HOME</a>
    <a href="#com" class="w3-bar-item w3-button"><i class="fa fa-group"></i>COMMUNITIES</a>
    <a href="#about" class="w3-bar-item w3-button"><i class="fa fa-user"></i>ABOUT</a>

  </div>

  <!-- Navbar on small screens -->

</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" align="center" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-xlarge w3-wide w3-animate-opacity"><img src="images/bcia.png"></span>
    <br>
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity w3-hide-small">BOGOR COMMUNITY</span>
    <br>
    <br>
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity w3-hide-small">IN ACTION</span>
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity w3-hide-large w3-hide-medium">BCIA</span>
    <br>
    <br>
    <a class="btn btn-default btn-lg col-md-6 col-sm-6 col-xs-6 w3-light-grey" href="login_user/login.php">User Login</a>
    <a class="btn btn-default btn-lg col-md-6 col-sm-6 col-xs-6 w3-light-grey" href="admins/login.php">Admin Login</a>
    <br>
  </div>
</div>
<!-- Container (Community Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">OUR COMMUNITIES</h3>
  <p class="w3-center"><em>Bogor Community in Action</em></p>
  <p>Bogor Community in Action merupakan web untuk mencari, bergabung, dan membuat komunitas yang berada di kota Bogor. Website ini memudahkan pengguna untuk mengembangkan kemampuan dan bakatnya.</p>
</div>
<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="com">
  <h3 class="w3-center">ABOUT BCiA</h3>
  <p class="w3-center"><em>Bogor Community in Action</em></p>
  <p>Bogor Community in Action merupakan web untuk mencari, bergabung, dan membuat komunitas yang berada di kota Bogor. Website ini memudahkan pengguna untuk mengembangkan kemampuan dan bakatnya.</p>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <br>
  <br>
  <p>Bogor Community in Action</p>
</footer>


</body>
</html>
