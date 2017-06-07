<?php

require_once '../db_connect.php';
session_start();

// check if user is not logged in
if(empty($_SESSION['id_user'])) {
    header('location:index.php');
    exit();
}

if(isset($_SESSION['id_user'])) { ?>


<?php
$id_user = $_SESSION['id_user'];

$sql = "SELECT * FROM users WHERE id_user = $id_user";
$query = $connect->query($sql);
$result = $query->fetch_array();

// close database connection
$connect->close();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>

<ul>
    <li>Hello, <?php echo $result['username'] ?> </li>
    <li><a href="profile.php">Profile</a></li>
    <li><a href="setting.php">Setting</a></li>
    <li><a href="changepassword.php">Change Password</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>

</body>
</html>

<?php
}
?>
