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
    <title>Edit Comment</title>

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
              <th>ID Thread</th>
              <td><input type="number" name="id_thread" placeholder="id thread" /></td>
          </tr>
          <tr>
              <th>Comment</th>
              <td><textarea cols="50" rows="10" name="comment" value= "<?php echo $comment?>"/> </textarea></td>
            </tr>
            <tr>
                <input type="hidden" name="id_comment" value="<?php echo $data['id_comment']?>" />
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
