<?php
// Koneksi ke database MySQL
$servername = "localhost";  // Nama server MySQL
$username = "root";  // Nama pengguna MySQL (default: root)
$password = "";  // Password MySQL (default: kosong)
$dbname = "abilzs";  // Nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
