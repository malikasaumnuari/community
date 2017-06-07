<?php

require_once '../../db_connect.php';
if($_GET['id_community']) {
    $id_community = $_GET['id_community'];
if($_GET['id_member']) {
    $id_member = $_GET['id_member'];

    $sql = "UPDATE members_community SET active = 3 WHERE id_member = {$id_member}";
    if($connect->query($sql) === TRUE) {
		header("location: ../../memb-list.php?id_community=$id_community");
    } else {
        echo "Error updating record : " . $connect->error;
    }

    $connect->close();
}
}

?>
