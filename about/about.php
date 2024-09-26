<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - SMKN 3 Yogyakarta</title>
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
        <h1>Tentang SMKN 3 Yogyakarta</h1>
        <p>SMKN 3 Yogyakarta adalah sekolah kejuruan yang berfokus pada pengembangan keterampilan teknis dan akademik siswa. Kami memiliki berbagai program pendidikan yang dirancang untuk mempersiapkan siswa menghadapi tantangan dunia kerja.</p>
        <p>Salah satu program unggulan kami adalah ekstrakurikuler yang beragam, mulai dari olahraga hingga seni. Setiap kegiatan ekstrakurikuler difasilitasi oleh pembimbing yang kompeten untuk membantu siswa mengembangkan bakat dan minat mereka.</p>
        <img src="../gambar/skm.png" alt="Logo SMK Negeri 3 Yogyakarta" style="width: 100%; height: auto;"> <!-- Tambahkan gambar di konten utama -->
    </div>
</body>
</html>
