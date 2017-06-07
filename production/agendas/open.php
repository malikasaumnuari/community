<?php

require_once '../db_connect.php';

if($_GET['id_agenda']) {
    $id_agenda = $_GET['id_agenda'];

    $sql = "SELECT * FROM agendas WHERE id_agenda = {$id_agenda}";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();

    $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Remove Agenda</title>
</head>
<body>

<h3>Do you really want to open ?</h3>
<form action="php_action/open.php" method="post">

    <input type="hidden" name="id_agenda" value="<?php echo $data['id_agenda'] ?>" />
    <button type="submit">Save Changes</button>
    <a href="index.php"><button type="button">Back</button></a>
</form>

</body>
</html>

<?php
}
?>
