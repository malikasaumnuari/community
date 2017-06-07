<?php

require_once '../../db_connect.php';

if($_POST) {
    $id_admin = $_POST['id_admin'];

    $sql = "UPDATE admins SET active = 2 WHERE id_admin = {$id_admin}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Successfully removed!!</p>";
        echo "<a href='../index.php'><button type='button'>Back</button></a>";
    } else {
        echo "Error updating record : " . $connect->error;
    }

    $connect->close();
}

?>
