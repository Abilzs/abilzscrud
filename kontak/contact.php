<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - SMKN 3 Yogyakarta</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../gambar/skm.png">
</head>
<body>
    <!-- Navbar -->
    <nav>
    <div class="logo">
        <img src="../gambar/skm.png" alt="Logo SMKN 3 Yogyakarta">
        <a href="#">SMKN 3 Yogyakarta</a>
    </div>
    <ul>
        <li><a href="../login/index.php">Beranda</a></li>
        <li><a href="../about/about.php">Tentang</a></li>
        <li><a href="../kontak/contact.php">Kontak</a></li>
        
        <?php
        session_start(); // Memulai sesi
        if (isset($_SESSION['username'])) {
            // Jika pengguna sudah login, tampilkan tombol logout
            echo '<li><a href="../login/logout.php">Logout (' . htmlspecialchars($_SESSION['username']) . ')</a></li>';
        } else {
            // Jika pengguna belum login, tampilkan tombol login
            echo '<li><a href="../login/login.php">Login</a></li>';
        }
        ?>
    </ul>
</nav>


    <!-- Konten Utama -->
    <div class="container">
        <h1>Kontak Kami</h1>
        <p>Untuk informasi lebih lanjut atau jika ada pertanyaan, silakan hubungi kami:</p>
        <ul>
            <li>Email  : <a href="mailto:humas@smkn3jogja.sch.id">humas@smkn3jogja.sch.id</a></li>
            <li>Telepon: 0274-513503</li>
            <li>Alamat : Jl.R.W.Monginsidi No.2 Yogyakarta</li>
        </ul>
        <p>Anda juga bisa mengunjungi kami di sekolah selama jam kerja (Senin - Jumat, 08:00 - 15:00).</p>
    </div>
</body>
</html>
