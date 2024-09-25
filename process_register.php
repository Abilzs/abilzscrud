<?php
session_start();
include 'config.php';  // Menyertakan file koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);  // Hash password

    // Cek apakah username atau email sudah terdaftar
    $check_sql = "SELECT * FROM users WHERE username = ? OR email = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("ss", $username, $email);
    $check_stmt->execute();
    $result = $check_stmt->get_result();

    if ($result->num_rows > 0) {
        // Jika username atau email sudah terdaftar
        echo "<script>
                alert('Nama pengguna atau email sudah terdaftar!');
                window.location.href = 'login.php';
              </script>";
    } else {
        // Memasukkan pengguna baru ke database
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $email, $password);

        if ($stmt->execute()) {
            echo "<script>
                    alert('Pendaftaran berhasil, silakan login!');
                    window.location.href = 'login.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Terjadi kesalahan: " . $stmt->error . "');
                    window.location.href = 'login.php';
                  </script>";
        }

        $stmt->close();
    }

    $check_stmt->close();
    $conn->close();
}
?>
