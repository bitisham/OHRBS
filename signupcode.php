<?php
session_start();
include 'connection.php';
if (isset($_REQUEST['save'])) {
    $uname = $_POST['uname'];
    $uemail = $_POST['uemail'];
    $ucontact = $_POST['ucontact'];
    $upassword = $_POST['upassword'];
    $sql = "SELECT * FROM tbl_user WHERE email='$uemail' AND password='$upassword'";
    $result = mysqli_query($conn, $sql);
    $present = mysqli_num_rows($result);
    if ($present > 0) {
        $_SESSION['email_alert'] = '1';
        header("Location:signin.php");

    } else {
        $sql = "INSERT INTO tbl_user(name,email,contact,password)VALUES('$uname','$uemail','$ucontact','$upassword')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo ("Record inserted successfuly");
        } else {
            echo ("Error in data insertion");
        }
    }
}
?>