<?php
require_once '../db_connect.php';
if($_SESSION['id_community']==""){
?>
<script language="javascript">alert("Anda belum login");</script>
<script>document.location.href='indexlogin.php';</script>
<?php }
if (isset($_SESSION['id_community'])) $id_community = $_SESSION['id_community'];

if($_POST){
  $name_community = $_POST['name_community'];
  $category = $_POST['category'];
  $address_community = $_POST['address_community'];
  $about = $_POST['about'];

  $edit_profile = mysqli_query($connect, "UPDATE communities SET name_community = '$name_community', category = '$category', address_community = '$address_community', about = '$about' WHERE id_community = {$id_community}");

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
