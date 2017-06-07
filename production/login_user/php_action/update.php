<?php

require_once '../../db_connect.php';

if($_POST) {
    $username = $_POST['username'];
    $name = $_POST['name'];
	  $gender = $_POST['gender'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $date_birth = $_POST['date_birth'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $id_user = $_POST['id_user'];

    $sql = "UPDATE users SET username = '$username', name = '$name', gender = '$gender', address = '$address', contact = '$contact',  date_birth = '$date_birth', email = '$email', password = '$password' WHERE id_user = {$id_user}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='../edit.php?id_user=".$id_user."'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }

    $connect->close();

}

?>
