<?php
$host = "localhost";
$user = "root";        // sesuaikan jika pakai user lain
$password = "";        // sesuaikan dengan password MySQL kamu
$database = "proweb";  // nama database sesuai dengan file admin.sql kamu

$conn = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
