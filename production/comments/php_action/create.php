<?php

require_once '../../db_connect.php';
if($_GET['id_community']) {
    $id_community = $_GET['id_community'];
if($_GET['id_thread']) {
    $id_thread = $_GET['id_thread'];

if($_POST) {
	  $content = $_POST['content'];
      $id_user = $_SESSION['id_user'];

    $sql = "INSERT INTO posts (id_post, id_thread, content, date_create_post, id_user, active) VALUES ('', '$id_thread', '$content', NOW(), '$id_user', 1)";
    if($connect->query($sql) === TRUE) {
                       header("location: ../../thread-posts.php?id_community=$id_community&id_thread=$id_thread");
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    $connect->close();
}
}
}
?>
