<?php require_once '../db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Index Agenda</title>

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
    <a href="create.php"><button type="button">Add Agenda</button></a>
    <table border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>Name Agenda</th>
		            <th>Date</th>
                    <th>time start</th>
                    <th> time end</th>
                    <th> location</th>
                <th>Content Agenda</th>
                <th>Notes</th>
				        <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM agendas WHERE active = 1";
            $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['name_agenda']."</td>
			                  <td>".$row['date_agenda']."</td>
                        <td>".$row['time_start']."</td>
                        <td>".$row['time_end']."</td>
                        <td>".$row['agenda_location']."</td>
                        <td>".$row['content_agenda']."</td>
                        <td>".$row['agenda_notes']."</td>
                        <td>
                            <a href='edit.php?id_agenda=".$row['id_agenda']."'><button type='button'>Edit</button></a>
                            <a href='remove.php?id_agenda=".$row['id_agenda']."'><button type='button'>Remove</button></a>
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
