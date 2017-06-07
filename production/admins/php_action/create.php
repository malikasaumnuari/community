<?php

require_once '../../db_connect.php';

if($_POST) {
    $username_admin = $_POST['username_admin'];
	  $hashpassword_admin = $_POST['password_admin'];
    $password_admin = md5($hashpassword_admin);
    $pitcure_admin = $_POST['pitcure_admin'];

    $sql = "INSERT INTO admins (id_admin, username_admin, password_admin, pitcure_admin, active) VALUES ('', '$username_admin', '$password_admin', '$pitcure_admin' 1)";
    if($connect->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
        echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    $connect->close();
}

?>
