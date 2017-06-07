<?php
include '../db_connect.php';

     if (isset($_SESSION['id_user'])) {
        $id_user = $_SESSION['id_user']
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
    <body>

    <?php
      $query = mysqli_query($connect, "SELECT * FROM users WHERE id_user = '$id_user'");
      $result = mysqli_fetch_array($query);
    ?>
      <form class="" action="changeprofile.php" method="post">
        <img src="<?php echo $result['photo_user']?>" class="circle responsive-img" width="250" height="250" alt=""><br>
        <h4>Profile : <?php echo $result['username']?></h4>
        <br>Name:
        <?php echo $result['name']?>
        <br>Date of Birth:
        <?php echo $result['date_birth']?>
        <br>Gender:
        <?php echo $result['gender']?>
        <br>Email:
        <?php echo $result['email']?>
        <br>Contact:
        <?php echo $result['contact']?>
        <br>Address:
        <?php echo $result['address']?>

        <br><br><button type="submit" name="edit_profile">EDIT PROFILE</button>
      </form>
  </body>
  </html>
<?php } ?>
