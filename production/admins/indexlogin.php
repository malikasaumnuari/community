<?php

// check connection
require_once '../db_connect.php';

session_start();

// check if users already logged in
if(isset($_SESSION['id_admin'])) {
    header('location:home.php');
    exit();
}

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

                header('location:home.php');
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
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<fieldset>
    <legend>Login</legend>
    <?php if(!empty($errors)) {?>
        <div class="error">
            <?php foreach ($errors as $key => $value) {
                echo $value;
            } ?>
        </div>
    <?php } ?>


    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" >
        <table>
            <tr>
                <th><label for="username_admin">Username</label></th>
                <td>
                    <input type="text" name="username_admin" id="username_admin" placeholder="Username" autocomplete="off" />
                </td>
            </tr>
            <tr>
                <th><label for="password_admin">Password</label></th>
                <td>
                    <input type="password" name="password_admin" id="password_admin" placeholder="Password" autocomplete="off" />
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <button type="submit">Login</button>
                </td>
            </tr>
        </table>
    </form>

Not Registered ? Click <a href="create.php">Register</a>

</fieldset>

</body>
</html>
