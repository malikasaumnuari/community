<?php

require_once '../../db_connect.php';

if($_POST) {
    $id_user = $_POST['id_user'];
	  $id_member = $_POST['id_member'];
    $id_master = $_POST['id_master'];
    $id_admin = $_POST['id_admin'];
    $message = $_POST['message'];

    $sql = "INSERT INTO notifications (id_notif, id_user, id_member, id_master, id_admin, message, active) VALUES ('', '$id_user', '$id_member', '$id_master', '$id_admin', '$message', 1)";
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
