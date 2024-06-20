<?php
include '../db_config.php';
include '../essentials.php';
adminLogin();

if (isset($_POST['get_geenral'])) {
    $q = "SELECT * FROM 'settings' WHERE 'sr_no'=?";
    $values = [1];
    $res = select($q, $value, "i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
}



?>