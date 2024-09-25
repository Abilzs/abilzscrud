<?php
session_start();  // Memulai sesi

// Menghapus semua data sesi
session_unset(); 
session_destroy();  // Mengakhiri sesi

// Redirect ke halaman login
header("Location: login.php");
exit();
?>
