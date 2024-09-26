<?php
$servername = "localhost"; // Ganti jika diperlukan
$username = "root"; // Ganti sesuai username database Anda
$password = ""; // Ganti sesuai password database Anda
$dbname = "db_admin"; // Nama database

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
