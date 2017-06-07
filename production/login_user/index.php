<?php require_once '../db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Index User</title>

    <style type="text/css">
        .manageMember {
            width: 50%;
            margin: auto;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

    </style>

</head>
<body>

<div class="manageMember">
    <a href="create.php"><button type="button">Add User</button></a>
    <table border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>Username</th>
                <th>Name</th>
		            <th>Gender</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Date of Birth</th>
                <th>Email</th>
				        <th>Password</th>
				        <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM users";
            $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['username']."</td>
                        <td>".$row['name']."</td>
			                  <td>".$row['gender']."</td>
                        <td>".$row['address']."</td>
                        <td>".$row['contact']."</td>
                        <td>".$row['date_birth']."</td>
			                  <td>".$row['email']."</td>
			                  <td>".$row['password']."</td>
                        <td>
                            <a href='edit.php?id_user=".$row['id_user']."'><button type='button'>Edit</button></a>
                            <a href='remove.php?id_user=".$row['id_user']."'><button type='button'>Remove</button></a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
