<?php

require_once '../../db_connect.php';

if($_POST) {
    $id_community = $_GET['id_community'];
    $id_user = $_SESSION['id_user'];
    $join_reason = $_POST['join_reason'];
    

    $sql = "INSERT INTO members_community (id_community, id_member, join_reason, active, date_join) VALUES ('$id_community', '$id_user', '$join_reason', '1', NOW())";
    if($connect->query($sql) === TRUE) {

        header("location: ../../join-send.php");

    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    $connect->close();
}

?>
