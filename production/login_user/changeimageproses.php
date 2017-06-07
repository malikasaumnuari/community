<?php

require_once '../db_connect.php';

// check if user is not logged in
if(empty($_SESSION['id_user'])) {
    echo 'session out';
    exit();
}

if(isset($_SESSION['id_user'])) { ?>


<?php
$id_user = $_SESSION['id_user'];

$sql =mysqli_query($connect, "SELECT * FROM users WHERE id_user = $id_user");
$sqll = mysqli_fetch_array($sql)

?>

<?php
$user=$_SESSION['id_user'];
$db=new mysqli('localhost','root','','bogor_community');
if($db->connect_errno){
echo $db->connect_error;
}
$allowedExts = array("jpg", "jpeg", "gif", "png", "JPG");
$extension = @end(explode(".", $_FILES["file"]["name"]));
if(isset($_POST['pupload'])){
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/JPG")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 1000000)
&& in_array($extension, $allowedExts))
{
	if ($_FILES["file"]["error"] > 0)
	{
	echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
	}
	else
	{
		echo '<div class="plus">';
		echo "Uploaded Successully";
		echo '</div>';echo"<br/><b><u>Image Details</u></b><br/>";

		echo "Name: " . $_FILES["file"]["name"] . "<br/>";
		echo "Type: " . $_FILES["file"]["type"] . "<br/>";
		echo "Size: " . ceil(($_FILES["file"]["size"] / 1024)) . " KB";

		if (file_exists("../images/" . $_FILES["file"]["name"]))
		{
		unlink("../images/" . $_FILES["file"]["name"]);
		}
		else{
			$pic=$_FILES["file"]["name"];
			$conv=explode(".",$pic);
			$ext=$conv['1'];
			move_uploaded_file($_FILES["file"]["tmp_name"],"../images/". $user.".".$ext);
			echo "Stored in as: " . "../images/".$user.".".$ext;
			$url=$user.".".$ext;

			$query="update users set user_picture='$url' where id_user='$id_user'";
			if($upl=$db->query($query)){
			echo "<br/>Saved to Database successfully";
			}
		 }
	}
}else{
 echo "File Size Limit Crossed 1000 KB Use Picture Size less than 1000 KB";
 echo "File Must Be In jpg / jpeg / gif / png / JPG";

}
}
?>

<?php
}
?>