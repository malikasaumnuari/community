<?php
  include '../db_connect.php';
  session_start();
  if($_SESSION['id_user']==""){
  ?>
  <script language="javascript">alert("Anda belum login");</script>
  <script>document.location.href='indexlogin.php';</script>
  <?php }
  if (isset($_SESSION['id_user'])) {
    $id_user = $_SESSION['id_user'];
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>edit profile</title>
  </head>
  <body>
    <?php
      $query = mysqli_query($connect, "SELECT * FROM users WHERE id_user = '$id_user'");
      $result = mysqli_fetch_array($query);
    ?>
            <form action="changeprofileproses.php" method="post">
              <br>Username <br>
              <input type="text" name="username" id="username" value="<?php echo $result['username']?>">
              <br>Gender <br>
              <input  <select name="gender" required>
                      <option value="">Choose Gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                  </select>>
              <br>Address <br>
              <input type="text" name="address" id="address" value="<?php echo $result['address']?>">
              <br>Contact <br>
              <input type="number" name="contact" id="contact" min="12" value="<?php echo $result['contact']?>">
              <br>Date of Birth <br>
              <input type="date" name="date_birth" id="name_birth" value="<?php echo $result['date_birth']?>">
              <br>Email <br>
              <input type="email" name="email" id="email" value="<?php echo $result['email']?>">
              <br>Password <br>
              <input type="password" name="password" id="password" min="6" value="<?php echo $result['password']?>">
              <br><br><span>Unggah Foto Profile</span><br>
              <input type="file" name="photo" value="<?php echo $result['photo_user']?>">
              <p>
              <input type="checkbox" id="users" required/>
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
