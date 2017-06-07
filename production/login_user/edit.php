<?php

require_once '../db_connect.php';

if($_GET['id_user']) {
    $id_user = $_GET['id_user'];

    $sql = "SELECT * FROM users WHERE id_user = {$id_user}";
    $result = $connect->query($sql);

    $data = $result->fetch_assoc();

    $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>

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
    <legend>Edit User</legend>

    <form action="php_action/update.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Username</th>
                <td><input type="text" name="username" placeholder="Username" /></td>
            </tr>
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" placeholder="Name" /></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><select name="gender" required>
                        <option value="">Choose Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><input type="text" name="address" placeholder="Address" /></td>
            </tr>
            <tr>
                <th>Contact</th>
                <td><input type="number" name="contact" placeholder="Contact" /></td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td><input type="date" name="date_birth" placeholder="Date of Birth" /></td>
            </tr>
			<tr>
                <th>Email</th>
                <td><input type="email" name="email" placeholder="Email" /></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" min="6" name="password" placeholder="Password" /></td>
            </tr>
            <tr>
                <input type="hidden" name="id_user" value="<?php echo $data['id_user']?>" />
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
