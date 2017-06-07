<?php

require_once '../db_connect.php';

if($_GET['id_admin']) {
    $id_admin = $_GET['id_admin'];

    $sql = "SELECT * FROM admins WHERE id_admin = {$id_admin}";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();

    $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Remove Admin</title>
</head>
<body>

<h3>Do you really want to remove ?</h3>
<form action="php_action/remove.php" method="post">

    <input type="hidden" name="id_admin" value="<?php echo $data['id_admin'] ?>" />
    <button type="submit">Save Changes</button>
    <a href="index.php"><button type="button">Back</button></a>
</form>

</body>
</html>

<?php
}
?>
