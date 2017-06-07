<?php

require_once '../../db_connect.php';

if($_POST) {
    $id_community = $_POST['id_community'];
    $id_user = $_POST['id_user'];

    $id_master = $_POST['id_master'];

    $sql = "UPDATE masters_community SET id_community = '$id_community', id_user = '$id_user' WHERE id_master = {$id_master}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='../edit.php?id_master=".$id_master."'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }

    $connect->close();

}

?>
