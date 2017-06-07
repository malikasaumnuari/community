<?php

require_once '../db_connect.php';

if($_GET['id_master']) {
    $id_master = $_GET['id_master'];

    $sql = "SELECT * FROM masters_community WHERE id_master = {$id_master}";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();

    $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Remove Master</title>
</head>
<body>

<h3>Do you really want to remove ?</h3>
<form action="php_action/remove.php" method="post">

    <input type="hidden" name="id_master" value="<?php echo $data['id_master'] ?>" />
    <button type="submit">Save Changes</button>
    <a href="index.php"><button type="button">Back</button></a>
</form>

</body>
</html>

<?php
}
?>
