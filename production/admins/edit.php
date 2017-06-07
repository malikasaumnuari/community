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
    <title>Edit Admin</title>

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
    <legend>Edit Admin</legend>

    <form action="php_action/update.php" method="post">
        <table cellspacing="0" cellpadding="0">
          <tr>
              <th>Username Admin</th>
              <td><input type="text" name="username_admin" placeholder="username" /></td>
          </tr>
          <tr>
              <th>Password</th>
              <td><input type="password" name="password_admin" placeholder="password" /></td>
            </tr>
            <tr>
                <input type="hidden" name="id_admin" value="<?php echo $data['id_admin']?>" />
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
