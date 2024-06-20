<?php
include 'connection.php';
if (isset($_POST['login'])) {
    $email = $_POST['uemail'];
    $password = $_POST['upassword'];
    $sql = "SELECT * FROM tbl_user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        header("Location:userd.php");
    } else {
        header("Location:signin.php");
    }
}
?>