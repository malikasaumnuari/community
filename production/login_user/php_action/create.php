<?php

require_once '../../db_connect.php';

if($_POST) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $date_birth = $_POST['date_birth'];
    $email = $_POST['email'];
    $hashpassword = $_POST['password'];
    $password = md5($hashpassword);

    $cek_email = mysqli_query($connect, "SELECT * from users where email='$email'");
    $cek = mysqli_fetch_array($cek_email);
    if($cek){?>
      <script language="javascript">alert("Maaf, email yang anda masukkan sudah terdaftar");</script>
      <script>document.location.href='../login.php';</script>
    <?php }
    else {
      $sql = "INSERT INTO users (id_user, username, name, gender, address, contact, date_birth, email, password, master_access) VALUES ('', '$username', '$name', '$gender', '$address', '$contact', '$date_birth','$email', '$password', 0)";
      if($connect->query($sql) === TRUE) {
          header("location: ../acc-succ.php");
      } else {
          echo "Error " . $sql . ' ' . $connect->connect_error;
      }

      $connect->close();
  }
}
?>
