<?php

require_once '../../db_connect.php';

if($_POST) {
    $name_community = $_POST['name_community'];
    $date_create = $_POST['date_create'];
    $category = $_POST['category'];
    $address_community = $_POST['address_community'];
    $about = $_POST['about'];
    $reason = $_POST['reason'];

    $id_community = $_POST['id_community'];

    $sql = "UPDATE communities SET name_community = '$name_community', date_create = '$date_create', category = '$category', address_community = '$address_community', about = '$about', reason = '$reason' WHERE id_community = {$id_community}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='../edit.php?id_community=".$id_community."'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }

    $connect->close();

}

?>
