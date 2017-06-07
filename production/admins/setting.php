<?php require_once 'core/init.php';

if(not_logged_in() === TRUE) {
    header('location: login.php');
}

$userdata = getUserDataByUserId($_SESSION['id']);


if($_POST) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    if($fname == "") {
        echo " * First Name is Required <br />";
    }

    if($lname == "") {
        echo " * Last Name is Required <br />";
    }

    if($username == "") {
        echo " * Username is Required <br />";
    }

    if($contact == "") {
        echo " * Contact is Required <br />";
    }

    if($address == "") {
        echo " * Address is Required <br />";
    }

    if($fname && $lname && $username && $contact && $address) {
        $user_exists = users_exists_by_id($_SESSION['id'], $username);
        if($user_exists === TRUE) {
            echo "username already exists <br /> ";
        } else {
            if(updateInfo($_SESSION['id']) === TRUE) {
                echo "Successfully Updated <br />";
            } else {
                echo "Error while updating the information";
            }
        }
    }

}


?>


<!DOCTYPE html>
<html>
<head>
    <title>Setting</title>
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Username" value="<?php if($_POST) {
            echo $_POST['username'];
            } else {
                echo $userdata['username'];
                } ?>">
    </div>
    <br />

    <div>
        <label for="fname">First Name</label>
        <input type="text" name="fname" id="fname" placeholder="Fisrt Name" value="<?php if($_POST) {
            echo $_POST['fname'];
            } else {
                echo $userdata['first_name'];
                } ?>">
    </div>
    <br />

    <div>
        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname" placeholder="Last Name" value="<?php if($_POST) {
            echo $_POST['lname'];
            } else {
                echo $userdata['last_name'];
                } ?>">
    </div>
    <br />

    <div>
        <label for="contact">Contact</label>
        <input type="text" name="contact" id="contact" placeholder="Contact" value="<?php if($_POST) {
            echo $_POST['contact'];
            } else {
                echo $userdata['contact'];
                } ?>">
    </div>
    <br />

    <div>
        <label for="address">Address</label>
        <input type="text" name="address" id="address" placeholder="Address" value="<?php if($_POST) {
            echo $_POST['address'];
            } else {
                echo $userdata['address'];
                } ?>">
    </div>
    <br />

    <div>
        <button type="submit">Submit</button>
    </div>

</form>

<a href="dashboard.php"><button type="button">Back</button></a>

</body>
</html>
