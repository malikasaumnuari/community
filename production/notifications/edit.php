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
    <title>Edit Notification</title>

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
    <legend>Edit Notification</legend>

    <form action="php_action/update.php" method="post">
        <table cellspacing="0" cellpadding="0">
          <tr>
              <th>ID User</th>
              <td><input type="number" name="id_user" placeholder="id user" /></td>
          </tr>
          <tr>
              <th>ID Member</th>
              <td><input type="number" name="id_member" placeholder="id member" /></td>
          </tr>
          <tr>
              <th>ID Master</th>
              <td><input type="number" name="id_master" placeholder="id master" /></td>
          </tr>
          <tr>
              <th>ID Admin</th>
              <td><input type="number" name="id_admin" placeholder="id admin" /></td>
          </tr>
          <tr>
              <th>Message</th>
              <td><textarea cols="50" rows="10" name="message" value= "<?php echo $comment?>"/> </textarea></td>
          </tr>
            <tr>
                <input type="hidden" name="id_notif" value="<?php echo $data['id_notif']?>" />
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
