<?php

require_once '../../db_connect.php';
if($_GET['id_community']) {
    $id_community = $_GET['id_community'];
if($_GET['id_agenda']) {
    $id_agenda = $_GET['id_agenda'];

    $sql = "UPDATE agendas SET active = 3 WHERE id_agenda = {$id_agenda}";
    if($connect->query($sql) === TRUE) {
        header("location: ../../com-sche.php?id_community=$id_community");
    } else {
        echo "Error updating record : " . $connect->error;
    }

    $connect->close();
}
}
?>
