<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "sindi_portal"; // sesuai permintaan

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
