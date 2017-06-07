<?php

require_once '../../db_connect.php';

if($_POST) {
    $title_thread = $_POST['title_thread'];
    $date_thread = $_POST['date_thread'];

    $id_thread = $_POST['id_thread'];

    $sql = "UPDATE threads SET title_thread = '$title_thread', date_thread = '$date_thread' WHERE id_thread = {$id_thread}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='../edit.php?id_thread=".$id_thread."'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }

    $connect->close();

}

?>
