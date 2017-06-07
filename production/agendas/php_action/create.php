<?php

require_once '../../db_connect.php';

if($_GET['id_community']) {
    $id_community = $_GET['id_community'];

if($_POST) {
    $name_agenda = $_POST['name_agenda'];
	$date_agenda = $_POST['date_agenda'];
    $time_start = $_POST['time_start'];
    $time_end = $_POST['time_end'];
    $agenda_location=$_POST['agenda_location'];
    $content_agenda = $_POST['content_agenda'];
    $id_c = $_POST['content_agenda'];

    $sql = "INSERT INTO 
    agendas (id_agenda, name_agenda, date_agenda, time_start, time_end , agenda_location ,content_agenda, active, id_community) 
    VALUES ('', '$name_agenda', '$date_agenda', '$time_start' , '$time_end' , '$agenda_location','$content_agenda', 1, '$id_community')";
    if($connect->query($sql) === TRUE) {
                   header("location: ../../com-sche.php?id_community=$id_community");
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    $connect->close();
}
}

?>
