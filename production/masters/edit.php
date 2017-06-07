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
    <title>Edit Master</title>

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
    <legend>Edit Master</legend>

    <form action="php_action/update.php" method="post">
        <table cellspacing="0" cellpadding="0">
          <tr>
              <th>ID Community</th>
              <td><input type="number" name="id_community" placeholder="id community" /></td>
          </tr>
          <tr>
              <th>ID User</th>
              <td><input type="number" name="id_user" placeholder="id user" /></td>
            </tr>
            <tr>
                <input type="hidden" name="id_master" value="<?php echo $data['id_master']?>" />
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
