<?php

require_once '../db_connect.php';

if($_GET['id_thread']) {
    $id_thread = $_GET['id_thread'];

    $sql = "SELECT * FROM threads WHERE id_thread = {$id_thread}";
    $result = $connect->query($sql);

    $data = $result->fetch_assoc();

    $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Thread</title>

    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }

        table tr th {
            padding-top: 20px;
        }
    </style>

</head>
<body>

<fieldset>
    <legend>Edit Thread</legend>

    <form action="php_action/update.php" method="post">
        <table cellspacing="0" cellpadding="0">
          <tr>
              <th>Title Thread</th>
              <td><input type="text" name="title_thread" placeholder="Title_thread" /></td>
          </tr>
          <tr>
              <th>Date</th>
              <td><input type="date" name="date_thread" placeholder="Date_thread" /></td>
            </tr>
            <tr>
                <input type="hidden" name="id_thread" value="<?php echo $data['id_thread']?>" />
                <td><button type="submit">Save Changes</button></td>
                <td><a href="index.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>

</fieldset>

</body>
</html>

<?php
}
?>
