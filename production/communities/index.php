<?php require_once '../db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Index Community</title>

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
    <a href="create.php"><button type="button">Add Community</button></a>
    <table border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
               <th>ID Master</th>
                <th>Community Name</th>
                <th>Category</th>
                <th>Community Address</th>
                <th>About</th>
                <th>Reason</th>
				        <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM communities WHERE active = 1";
            $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['id_master']."</td>
                        <td>".$row['name_community']."</td>
                        <td>".$row['category']."</td>
                        <td>".$row['address_community']."</td>
                        <td>".$row['about']."</td>
                        <td>".$row['reason']."</td>
                        <td>
                            <a href='edit.php?id_community=".$row['id_community']."'><button type='button'>Edit</button></a>
                            <a href='remove.php?id_community=".$row['id_community']."'><button type='button'>Remove</button></a>
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
