<?php

require_once '../../db_connect.php';

if($_POST) {
    $username_admin = $_POST['username_admin'];
    $password_admin = $_POST['password_admin'];

    $id_admin = $_POST['id_admin'];

    $sql = "UPDATE admins SET username_admin = '$username_admin', password_admin = '$password_admin' WHERE id_admin = {$id_admin}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='../edit.php?id_admin=".$id_admin."'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }

    $connect->close();

}

?>
