<?php require_once '../db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Index Comment</title>

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
    <a href="create.php"><button type="button">Add Comment</button></a>
    <table border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>ID Thread</th>
		            <th>Comment</th>
                        <th>Date</th>
				        <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM posts WHERE active = 1";
            $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['id_thread']."</td>
			                  <td>".$row['content']."</td>
                              <td>".$row['date_create_post']."</td>
                        <td>
                            <a href='edit.php?id_comment=".$row['id_comment']."'><button type='button'>Edit</button></a>
                            <a href='remove.php?id_comment=".$row['id_comment']."'><button type='button'>Remove</button></a>
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
