<?php

require_once '../../db_connect.php';
if($_GET['id_community']) {
    $id_community = $_GET['id_community'];

if($_POST) {
    $title_thread = $_POST['title_thread'];
    $content = $_POST['content'];
    $id_user = $_SESSION['id_user'];
    $id_thread=$_GET[' '];
    $sql = "INSERT INTO threads (id_thread, title_thread, date_thread, id_user, active, id_community) VALUES ('$id_thread', '$title_thread', NOW(), '$id_user', 1, '$id_community')"; 

    if($connect->query($sql) === TRUE ) {
               header("location: ../../com-thread.php?id_community=$id_community");
        
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    $connect->close();
}
}
?>
