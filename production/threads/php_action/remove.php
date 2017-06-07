<?php

require_once '../../db_connect.php';
if($_GET['id_community']) {
    $id_community = $_GET['id_community'];
if($_GET['id_thread']) {
    $id_thread = $_GET['id_thread'];

    $sql = "UPDATE threads SET active = 2 WHERE id_thread = {$id_thread}";
    if($connect->query($sql) === TRUE) {
        header("location: ../../thread-edit.php?id_community=$id_community");
    } else {
        echo "Error updating record : " . $connect->error;
    }

    $connect->close();
}
}

?>
