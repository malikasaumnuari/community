<?php

require_once '../db_connect.php';

if($_GET['id_comment']) {
    $id_comment = $_GET['id_comment'];

    $sql = "SELECT * FROM comments WHERE id_comment = {$id_comment}";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();

    $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Remove Comment</title>
</head>
<body>

<h3>Do you really want to remove ?</h3>
<form action="php_action/remove.php" method="post">

    <input type="hidden" name="id_comment" value="<?php echo $data['id_comment'] ?>" />
    <button type="submit">Save Changes</button>
    <a href="index.php"><button type="button">Back</button></a>
</form>

</body>
</html>

<?php
}
?>
