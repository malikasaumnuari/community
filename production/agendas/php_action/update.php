<?php

require_once '../../db_connect.php';

if($_POST) {
    $name_agenda = $_POST['name_agenda'];
    $date_agenda = $_POST['date_agenda'];
    $content_agenda = $_POST['content_agenda'];
    $absent = $_POST['absent'];

    $id_agenda = $_POST['id_agenda'];

    $sql = "UPDATE agendas SET name_agenda = '$name_agenda', date_agenda = '$date_agenda', content_agenda = '$content_agenda', absent = '$absent' WHERE id_agenda = {$id_agenda}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='../edit.php?id_agenda=".$id_agenda."'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }

    $connect->close();

}

?>
