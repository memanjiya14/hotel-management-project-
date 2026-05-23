<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "hotelmanage_system";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    echo "<script>alert('Unable to connect to the database');</script>";
    exit();
}
?>
