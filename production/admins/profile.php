<?php
include '../db_connect.php';

    if($_SESSION['id_admin'] == ""){
      ?>
      <script language="javascript">alert("Anda belum login");</script>
      <script>document.location.href='indexlogin.php';</script>
      <?php
    }
      if (isset($_SESSION['id_admin'])) {
        $id_admin = $_SESSION['id_admin']
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <body>

    <?php
      $query = mysqli_query($connect, "SELECT * FROM admins WHERE id_admin = '$id_admin'");
      $result = mysqli_fetch_array($query);
    ?>
      <form class="" action="changeprofile.php" method="post">
        <img src="<?php echo $result['photo_admin']?>" class="circle responsive-img" width="250" height="250" alt=""><br>
        <h4>Profil : <?php echo "username_admin " .$result['username_admin']?></h4>
        <br>Password Admin:
        <?php echo $result['password_admin']?>

        <br><br><button type="submit" name="edit_profile">EDIT PROFILE</button>
      </form>
  </body>
  </html>
<?php } ?>
