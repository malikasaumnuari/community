<?php
  include '../db_connect.php';
  if($_SESSION['id_admin']==""){
  ?>
  <script language="javascript">alert("Anda belum login");</script>
  <script>document.location.href='indexlogin.php';</script>
  <?php }
  if (isset($_SESSION['id_admin'])) {
    $id_admin = $_SESSION['id_admin'];
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>edit profile</title>
  </head>
  <body>
    <?php
      $query = mysqli_query($connect, "SELECT * FROM admins WHERE id_admin = '$id_admin'");
      $result = mysqli_fetch_array($query);
    ?>
            <form action="changeprofileproses.php" method="post">
              <br>Username Admin <br>
              <input type="text" name="username_admin" id="username_admin" value="<?php echo $result['username_admin']?>">
              <br>Password admins <br>
              <input type="password_admin" name="password_admin" id="password_admin" min="6" value="<?php echo $result['password_admin']?>">
              <br><br><span>Unggah Foto Profile</span><br>
              <input type="file" name="photo" value="<?php echo $result['photo_admin']?>">
              <p>
              <input type="checkbox" id="admins" required/>
              <label for="test5">Saya menyetujui Perubahan</label>
              </p>
              <br><button class="btn waves-effect waves-teal" type="submit" >SUBMIT</button>
              </form>
              <form class="" action="profile.php" method="post">
                <button type="submit" name="button">BATAL</button>
              </form>
  </body>
</html>
<?php } ?>
