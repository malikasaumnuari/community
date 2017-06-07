<?php
require_once '../db_connect.php';
if($_SESSION['id_admin']==""){
?>
<script language="javascript">alert("Anda belum login");</script>
<script>document.location.href='indexlogin.php';</script>
<?php }
if (isset($_SESSION['id_admin'])) $id_admin = $_SESSION['id_admin'];

if($_POST){
  $username_admin = $_POST['username_admin'];
  $hashpassword_admin = $_POST['password_admin'];
  $password_admin = md5($hashpassword_admin);

  $edit_profile = mysqli_query($connect, "UPDATE admins SET username_admin = '$username_admin', password_admin = '$password_admin' WHERE id_admin = {$id_admin}");

  if($edit_profile) {
    ?>
    <script language="javascript">alert("Informasi umum berhasil diubah");</script>
    <script>document.location.href='profile.php';</script>
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
