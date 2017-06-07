<?php

require_once '../../db_connect.php';

if($_POST) {
    $id_user = $_POST['id_user'];

    $sql = "DELETE FROM users WHERE id_user = {$id_user}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Successfully removed!!</p>";
        echo "<a href='../../6 Admin - List User.php'><button type='button'>Back</button></a>";
    } else {
        echo "Error updating record : " . $connect->error;
    }

    $connect->close();
}

?>
