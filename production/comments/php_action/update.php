<?php

require_once '../../db_connect.php';

if($_POST) {
    $id_thread = $_POST['id_thread'];
    $comment = $_POST['comment'];

    $id_comment = $_POST['id_comment'];

    $sql = "UPDATE comments SET id_thread = '$id_thread', comment = '$comment' WHERE id_comment = {$id_comment}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='../edit.php?id_comment=".$id_comment."'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }

    $connect->close();

}

?>
