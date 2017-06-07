<?php

require_once '../../db_connect.php';

if($_POST) {
    $id_community = $_POST['id_community'];
    $date_join = $_POST['date_join'];
    $id_user = $_POST['id_user'];

    $id_member = $_POST['id_member'];

    $sql = "UPDATE members_community SET id_community = '$id_community', date_join = '$date_join', id_user = '$id_user' WHERE id_member = {$id_member}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='../edit.php?id_member=".$id_member."'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }

    $connect->close();

}

?>
