<?php

require_once '../../db_connect.php';

if($_GET['id_community']) {
    $id_community = $_GET['id_community'];
    $id_master = $_GET['id_master'];

	$sql = "UPDATE communities SET active = 2 WHERE id_community = {$id_community}";
	$sql2 = "INSERT INTO members_community (id_member, date_join, id_community, active) VALUES ($id_master, NOW(), $id_community, 2)";
	if($connect->query($sql) === TRUE)
	{
		if($connect->query($sql2) === TRUE)
		{
			        header("location: ../../indexadmin.php");
		}
	}
	else
	{
		echo "Approve Failed : " . $connect->error;
	}

	$connect->close();
}
?>
