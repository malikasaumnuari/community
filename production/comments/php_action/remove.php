<?php

require_once '../../db_connect.php';
if($_GET['id_community']) {
    $id_community = $_GET['id_community'];
if($_GET['id_thread']) {
    $id_thread = $_GET['id_thread'];
    $id_post = $_GET['id_post'];

    $sql = "UPDATE posts SET active = 2 WHERE id_post = {$id_post}";
    if($connect->query($sql) === TRUE) {
		header("location: ../../thread-posts-edit.php?id_community=$id_community&id_thread=$id_thread");
    } else {
        echo "Error updating record : " . $connect->error;
    }

    $connect->close();
}
}

?>
