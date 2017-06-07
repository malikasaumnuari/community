<?php

require_once '../../db_connect.php';

if($_POST) {
    $id_community = $_POST['id_community'];
	  $date_join = $_POST['date_join'];
    $id_user = $_POST['id_user'];

    $sql = "INSERT INTO members_community (id_member, id_community, date_join, id_user, active) VALUES ('', '$id_community', '$date_join', '$id_user', 1)";
    if($connect->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
        echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    $connect->close();
}

?>
