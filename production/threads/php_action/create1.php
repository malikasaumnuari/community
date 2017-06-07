<?php

require_once '../../db_connect.php';

if($_GET) {
    $id_thread = $_GET['id_thread'];
    $content = $_GET['content'];
    $id_user = $_SESSION['id_user'];

    $sql2 = "INSERT INTO posts (id_post, id_thread, content, date_create_post, id_user, active) VALUES ('','$id_thread', '$content', NOW(), '$id_user', 1)";

        if($connect->query($sql2) === TRUE ) {
               header("location: ../../com-thread.php");
        }
        else{
            echo "Error " . $sql . ' ' . $connect->connect_error;    
        }

    $connect->close();
}

?>
