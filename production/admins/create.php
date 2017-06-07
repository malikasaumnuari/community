<!DOCTYPE html>
<html>
<head>
    <title>Create Admin</title>

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
    <legend>Add Admin</legend>

    <form action="php_action/create.php" method="post">
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
                <td><button type="submit">Save Changes</button></td>
                <td><a href="index.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>

Already Registered ? Click <a href="indexlogin.php">login</a>

</fieldset>

</body>
</html>
