<?php
require_once '../db_connect.php';
if($_SESSION['id_user']==""){
?>
<script language="javascript">alert("Anda belum login");</script>
<script>document.location.href='indexlogin.php';</script>
<?php }
if (isset($_SESSION['id_user'])) $id_user = $_SESSION['id_user'];

if($_POST){
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];

  $edit_profile = mysqli_query($connect, "UPDATE users SET name = '$name', gender = '$gender', address = '$address', contact = '$contact',  email = '$email' WHERE id_user = $id_user");

  if($edit_profile) {
    ?>
    <script language="javascript">alert("Informasi umum berhasil diubah");</script>
    <script>document.location.href='../userprofile.php';</script>
    <?php
  }
  else  {
    ?>
    <script language="javascript">
    alert("Informasi umum gagal diubah, silahkan isi dengan benar");</script>
    <script>document.location.href='changeprofile.php';</script>
    <?php
  }
  }
