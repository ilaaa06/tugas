<?php
// Informasi koneksi database
$host = "localhost"; // Nama host database
$username = "root"; // Nama pengguna database
$password = ""; // Kata sandi database
$database = "uts_312310149"; // Nama database

// Membuat koneksi
$koneksi = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}


// Setelah ini, Anda dapat menggunakan variabel $conn untuk melakukan query ke database.
?>
