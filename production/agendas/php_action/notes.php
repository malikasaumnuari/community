<?php

require_once '../../db_connect.php';
if($_GET['id_community']) {
    $id_community = $_GET['id_community'];
if($_GET['id_agenda']) {
    $id_agenda = $_GET['id_agenda'];
if($_POST) {
    $agenda_notes = $_POST['agenda_notes'];

    $sql = "UPDATE agendas SET agenda_notes = '$agenda_notes', active=4 WHERE id_agenda = {$id_agenda}"; 

    if($connect->query($sql) === TRUE) {
                   header("location: ../../com-sche.php?id_community=$id_community");
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    $connect->close();
}
}
}

?>
