<?php

// check connection
require_once '../db_connect.php';

session_start();

// check if users already logged in
if(isset($_SESSION['id_user'])) {
    header('location:home.php');
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
                <th><label for="username">Username</label></th>
                <td>
                    <input type="text" name="username" id="username" placeholder="Username" autocomplete="off" />
                </td>
            </tr>
            <tr>
                <th><label for="password">Password</label></th>
                <td>
                    <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" />
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
    <tr> New to BCiA? <a href="create.php">Create an account</a> </tr>

</fieldset>

</body>
</html>
