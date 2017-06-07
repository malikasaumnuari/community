<?php

require_once '../../db_connect.php';

if($_POST) {
    $id_master = $_POST['id_master'];

    $sql = "UPDATE masters_community SET active = 2 WHERE id_master = {$id_master}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Successfully removed!!</p>";
        echo "<a href='../index.php'><button type='button'>Back</button></a>";
    } else {
        echo "Error updating record : " . $connect->error;
    }

    $connect->close();
}

?>
