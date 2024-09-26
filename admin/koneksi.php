<?php
$host = 'localhost';  // Nama host database, biasanya 'localhost'
$dbname = 'abilzs';  // Ganti dengan nama database kamu
$username = 'root';  // Username untuk MySQL (sesuaikan jika berbeda)
$password = '';  // Password untuk MySQL (kosong jika tidak ada password)

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $dbname);

// Memeriksa apakah koneksi berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
