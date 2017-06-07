<?php

require_once '../../db_connect.php';

if($_POST) {
    $id_notif = $_POST['id_notif'];

    $sql = "UPDATE notifications SET active = 2 WHERE id_notif = {$id_notif}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Successfully removed!!</p>";
        echo "<a href='../index.php'><button type='button'>Back</button></a>";
    } else {
        echo "Error updating record : " . $connect->error;
    }

    $connect->close();
}

?>
