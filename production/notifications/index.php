<?php require_once '../db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Index Notification</title>

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
    <a href="create.php"><button type="button">Add Notification</button></a>
    <table border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>ID User</th>
		            <th>ID Member</th>
                <th>ID Master</th>
                <th>ID Admin</th>
                <th>Massage</th>
				        <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM notifications WHERE active = 1";
            $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['id_user']."</td>
			                  <td>".$row['id_member']."</td>
                        <td>".$row['id_master']."</td>
                        <td>".$row['id_admin']."</td>
                        <td>".$row['message']."</td>
                        <td>
                            <a href='edit.php?id_notif=".$row['id_notif']."'><button type='button'>Edit</button></a>
                            <a href='remove.php?id_notif=".$row['id_notif']."'><button type='button'>Remove</button></a>
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
