<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>

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
    <legend>Add User</legend>

    <form action="php_action/create.php" method="post">
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
                <td><input type="text" name="address" min="6" placeholder="Address" /></td>
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
                <td><button type="submit">Save Changes</button></td>
                <td><a href="index.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>

Already a member? <a href="indexlogin.php">log in</a>

</fieldset>

</body>
</html>
