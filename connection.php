<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'dbroombook';
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Unable to connect database");
} else {
    echo ("Database connected successful");
}
?>