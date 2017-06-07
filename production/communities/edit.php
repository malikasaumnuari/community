<?php

require_once '../db_connect.php';

if($_GET['id_community']) {
    $id_community = $_GET['id_community'];

    $sql = "SELECT * FROM communities WHERE id_community = {$id_community}";
    $result = $connect->query($sql);

    $data = $result->fetch_assoc();

    $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Community</title>

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
    <legend>Edit Community</legend>

    <form action="php_action/update.php" method="post">
        <table cellspacing="0" cellpadding="0">
          <tr>
              <th>ID Master</th>
              <td><input type="number" name="id_master" placeholder="id master" /></td>
          </tr>
          <tr>
              <th>Community Name</th>
              <td><input type="text" name="name_community" placeholder="name" /></td>
          </tr>
          <tr>
              <th>Category</th>
              <td><select name="category" required>
                <option value="">Choose Category</option>
                <option value="sports">Sports</option>
                <option value="lifestyle">Lifestyle</option>
                <option value="education">Education</option>
                <option value="entertainment">Entertainment</option>
                <option value="hobbies">Hobbies</option>
                <option value="arts">Arts</option>
                  </select></td>
          </tr>
          <tr>
              <th>Community Address</th>
              <td><input type="text" name="address_community" placeholder="address" /></td>
          </tr>
          <tr>
              <th>About</th>
              <td><input type="text" name="about" placeholder="about" /></td>
          </tr>
          <tr>
              <th>Reason</th>
              <td><textarea cols="50" rows="10" name="reason" value= "<?php echo $comment?>"/> </textarea></td>
          </tr>
            <tr>
                <input type="hidden" name="id_community" value="<?php echo $data['id_community']?>" />
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
