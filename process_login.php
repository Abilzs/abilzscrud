<?php
session_start();
include 'config.php';  // Menyertakan file koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Mencari pengguna berdasarkan username
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            // Login berhasil, simpan username ke sesi
            $_SESSION['username'] = $username;
            echo "<script>
                    alert('Login berhasil');
                    window.location.href = 'index.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Password salah');
                    window.location.href = 'login.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Username tidak ditemukan');
                window.location.href = 'login.php';
              </script>";
    }

    $stmt->close();
    $conn->close();
}
?>
