<?php

require_once '../db_connect.php';

if($_GET['id_community']) {
    $id_community = $_GET['id_community'];
    $id_master = $_GET['id_master'];

    $sql = "SELECT * FROM communities WHERE id_community = {$id_community}";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();

    $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Approve Community</title>
</head>
<body>

<h3>Do you really want to Approve ?</h3>
<form action="php_action/approve.php" method="post">

    <input type="hidden" name="id_community" value="<?php echo $data['id_community'] ?><?php echo $data['id_community'] ?>" />
    <button type="submit">Save Changes</button>
    <a href="../indexadmin.php"><button type="button">Back</button></a>
</form>

</body>
</html>

<?php
}
?>
