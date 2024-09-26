<?php
session_start();
include 'config.php'; // File ini berisi koneksi database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mengambil data admin
    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $admin = $result->fetch_assoc();

    // Verifikasi password
    if ($admin && $admin['password'] === $password) {
        $_SESSION['admin_id'] = $admin['id'];
        header('Location: admin.php'); // Redirect ke dashboard admin
        exit();
    } else {
        $error = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="style.css"> <!-- Tambahkan CSS sesuai kebutuhan -->
</head>
<body>
    <div class="container">
        <h2>Login Admin</h2>
        <form action="" method="POST">
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Login</button>
            <?php if (isset($error)): ?>
                <p style="color:red;"><?= $error; ?></p>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>
