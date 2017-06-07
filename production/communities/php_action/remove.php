<?php

require_once '../../db_connect.php';

if($_GET['id_community']) {
    $id_community = $_GET['id_community'];

    $sql = "DELETE FROM communities WHERE id_community = {$id_community}";
    if($connect->query($sql) === TRUE) {
        header("location: ../../indexadmin.php");
    } else {
        echo "Error updating record : " . $connect->error;
    }

    $connect->close();
}

?>
