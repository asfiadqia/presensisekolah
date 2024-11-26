<?php
// koneksi.php

$host = 'localhost';
$dbname = '19017_psas';
$username = 'root';  // Sesuaikan dengan username MySQL Anda
$password = '';  // Sesuaikan dengan password MySQL Anda

// Membuat koneksi ke database menggunakan mysqli
$conn = mysqli_connect($host, $username, $password, $dbname);

// Memastikan koneksi berhasil
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Jika koneksi berhasil, Anda dapat melanjutkan ke proses lainnya
?>