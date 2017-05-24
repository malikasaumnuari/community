<?php

// check connection
require_once 'db_connect.php';

session_start();

// check if users already logged in
if(isset($_SESSION['id_user'])) {
    header('location:../index.php');
    exit();
}

if( !empty($_POST) ) {
    $errors = array();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if( empty($username) == true OR empty($password) == true ) {
        $errors[] = '* Username/Password field is required';
    }
    else {
        // if username exists
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $query = $connect->query($sql);
        if( $query->num_rows > 0 ) {
            // check username and password
            $password = md5($password);

            $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
            $query = $connect->query($sql);
            $result = $query->fetch_array();

            $connect->close();

            if($query->num_rows == 1) {
                $_SESSION['logged_in'] = true;
                $_SESSION['id_user'] = $result['id_user'];

                header('location:../index.php');
                exit();
            }
            else {
                $errors[] = ' * Username/Password combination is incorrect';
            }
        }
        else {
            $errors[] = ' * Username doesn\'t exists';
        }
    }

}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bogor Community in Action</title>

    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?php if(!empty($errors)) {?>
                <div class="error">
                    <?php foreach ($errors as $key => $value) {
                        echo $value;
                    } ?>
                </div>
            <?php } ?>


            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-default submit">Log in</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to BCiA?
                  <a href="#signup" class="to_register"> Create an account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> BCiA</h1>
                  <p>Bogor Community in Action</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="php_action/create.php" method="post">
              <h1>Create Account</h1>


              <div>
                <input type="text" class="form-control" name="username" placeholder="Username" required="" />
              </div>
              <div>
                <input type="text" class="form-control" name="name" placeholder="Name" required="" />
              </div>
               <div>
                          <select class="form-control" name="gender" required>
                            <option value="">Choose Gender</option>
                            <option value="L">Male</option>
                            <option value="P">Female</option>
                          </select>
              </div>
              <br>

              <div>
                <input type="text" class="form-control" name="address" placeholder="Address" required="" />
              </div>

              <div>
                <input type="number" class="form-control" name="contact" placeholder="Contact" required="" />
              </div>
              <br>
              <div>
                <input type="date" class="form-control" name="date_birth" placeholder="Date of Birth" />
              </div>

              <br>

              <div>
                <input type="email" class="form-control" name="email" placeholder="Email"  required="" />
              </div>

              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-default submit">Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Bogor Community in Action</h1>
                  <p>Bogor Community in Action</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
