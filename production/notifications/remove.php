<?php

require_once '../db_connect.php';

if($_GET['id_notif']) {
    $id_notif = $_GET['id_notif'];

    $sql = "SELECT * FROM notifications WHERE id_notif = {$id_notif}";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();

    $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Remove Notification</title>
</head>
<body>

<h3>Do you really want to remove ?</h3>
<form action="php_action/remove.php" method="post">

    <input type="hidden" name="id_notif" value="<?php echo $data['id_notif'] ?>" />
    <button type="submit">Save Changes</button>
    <a href="index.php"><button type="button">Back</button></a>
</form>

</body>
</html>

<?php
}
?>
