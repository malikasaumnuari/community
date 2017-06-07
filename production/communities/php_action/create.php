<?php

require_once '../../db_connect.php';

if($_POST) {
    $name_community = $_POST['name_community'];
    $category = $_POST['category'];
    $address_community = $_POST['address_community'];
    $about = $_POST['about'];
    $reason = $_POST['reason'];
    $id_master = $_SESSION['id_user'];

    $sql = "INSERT INTO communities (id_community, name_community, category, address_community, about, reason, active, id_master) VALUES ('', '$name_community', '$category', '$address_community','$about', '$reason', 1, '$id_master')";
    if($connect->query($sql) === TRUE) {

        header("location: ../../create-send.php");

    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    $connect->close();
}

?>
