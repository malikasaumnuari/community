<?php

require_once '../../db_connect.php';

if($_POST) {
  $id_user = $_POST['id_user'];
  $id_member = $_POST['id_member'];
  $id_master = $_POST['id_master'];
  $id_admin = $_POST['id_admin'];
  $message = $_POST['message'];

    $id_notif = $_POST['id_notif'];

    $sql = "UPDATE notifications SET id_user = '$id_user', id_member = '$id_member', id_master = '$id_master', id_admin = '$id_admin', message = '$message' WHERE id_notif = {$id_notif}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='../edit.php?id_notif=".$id_notif."'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }

    $connect->close();

}

?>
