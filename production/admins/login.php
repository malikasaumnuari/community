<?php

// check connection
require_once '../db_connect.php';

// check if users already logged in
if(isset($_SESSION['id_admin'])) {
    header('location:../indexadmin.php');
    exit();
} else if(isset($_SESSION['id_user'])) {
    header('location:../index.php');
    exit();
}

// check if users already logged in

if( !empty($_POST) ) {
    $errors = array();

    $username_admin = $_POST['username_admin'];
    $password_admin = $_POST['password_admin'];

    if( empty($username_admin) == true OR empty($password_admin) == true ) {
        $errors[] = '* Username/Password field is required';
    }
    else {
        // if username exists
        $sql = "SELECT * FROM admins WHERE username_admin = '$username_admin'";
        $query = $connect->query($sql);
        if( $query->num_rows > 0 ) {
            // check username and password
            $password_admin = md5($password_admin);

            $sql = "SELECT * FROM admins WHERE username_admin = '$username_admin' AND password_admin = '$password_admin'";
            $query = $connect->query($sql);
            $result = $query->fetch_array();

            $connect->close();

            if($query->num_rows == 1) {
                $_SESSION['logged_in'] = true;
                $_SESSION['id_admin'] = $result['id_admin'];

                header('location:../indexadmin.php');
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
              <h1>Admin Login</h1>
              <div>
                <input type="text" class="form-control" name="username_admin" id="username" placeholder="Username" autocomplete="off" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password_admin" id="password" placeholder="Password" autocomplete="off" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-default submit">Log in</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">


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

            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
