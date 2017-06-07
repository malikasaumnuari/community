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
    <title>Edit Agenda</title>

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
    <legend>Edit Agenda</legend>

    <form action="php_action/update.php" method="post">
        <table cellspacing="0" cellpadding="0">
          <tr>
              <th>Name_agenda</th>
              <td><input type="text" name="name_agenda" placeholder="name" /></td>
          </tr>
          <tr>
              <th>Date_agenda</th>
              <td><input type="date" name="date_agenda" placeholder="date_agenda" /></td>
          </tr>
          <tr>
              <th>Content_agenda</th>
              <td><textarea cols="50" rows="10" name="comment" value= "<?php echo $comment?>"/> </textarea></td>
          </tr>
          <tr>
              <th>Absent</th>
              <td><input type="text" name="absent" placeholder="absent" /></td>
          </tr>
            <tr>
                <input type="hidden" name="id_agenda" value="<?php echo $data['id_agenda']?>" />
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
