<?php

require_once '../db_connect.php';

if($_GET['id_member']) {
    $id_member = $_GET['id_member'];

    $sql = "SELECT * FROM members_community WHERE id_member = {$id_member}";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();

    $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Remove Member</title>
</head>
<body>

<h3>Do you really want to remove ?</h3>
<form action="php_action/remove.php" method="post">

    <input type="hidden" name="id_member" value="<?php echo $data['id_member'] ?>" />
    <button type="submit">Save Changes</button>
    <a href="index.php"><button type="button">Back</button></a>
</form>

</body>
</html>

<?php
}
?>
