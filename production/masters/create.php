<!DOCTYPE html>
<html>
<head>
    <title>Create Master</title>

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
    <legend>Add Master</legend>

    <form action="php_action/create.php" method="post">
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
                <td><button type="submit">Save Changes</button></td>
                <td><a href="index.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>

</fieldset>

</body>
</html>
