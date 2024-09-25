

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Ekstrakurikuler - SMKN 3 Yogyakarta</title>
    <link rel="stylesheet" href="style.css"> <!-- Hubungkan dengan file CSS eksternal -->
    <link rel="icon" type="image/x-icon" href="gambar/skm.png">
</head>
<body>
    <!-- Navbar -->
    <nav>
    <div class="logo">
        <img src="skm.png" alt="Logo SMKN 3 Yogyakarta">
        <a href="#">SMKN 3 Yogyakarta</a>
    </div>
    <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="about.php">Tentang</a></li>
        <li><a href="contact.php">Kontak</a></li>
        
        <?php
        session_start(); // Memulai sesi
        if (isset($_SESSION['username'])) {
            // Jika pengguna sudah login, tampilkan tombol logout
            echo '<li><a href="logout.php">Logout (' . htmlspecialchars($_SESSION['username']) . ')</a></li>';
        } else {
            // Jika pengguna belum login, tampilkan tombol login
            echo '<li><a href="login.php">Login</a></li>';
        }
        ?>
    </ul>
</nav>


    <div class="container">
        <h1>Pendaftaran Ekstrakurikuler SMKN 3 Yogyakarta</h1>
        <p>Silahkan isi form berikut untuk mendaftar ke ekstrakurikuler yang tersedia.</p>

        <form action="submit.php" method="POST">
    <label for="nama">Nama Lengkap:</label>
    <input type="text" id="nama" name="nama" required>

    <label for="kelas">Kelas:</label>
    <input type="text" id="kelas" name="kelas" required>

    <label for="Nomor_Telepon">Nomor WhatsApp:</label>
    <input type="text" id="Nomor_Telepon" name="Nomor_Telepon" required>

    <label for="ekstrakurikuler">Pilih Ekstrakurikuler:</label>
    <select id="ekstrakurikuler" name="ekstrakurikuler" required>
        <option value="">-- Pilih Ekstrakurikuler --</option>
        <option value="Pramuka">Pramuka</option>
        <option value="Tonti">Tonti</option>
        <option value="Futsal">Futsal</option>
        <option value="Basket">Basket</option>
        <option value="Renang">Renang</option>
        <option value="PMR">PMR</option>
        <option value="Karawitan">Karawitan</option>
        <option value="Bulutangkis">Bulutangkis</option>
        <option value="Pecinta Alam">Pecinta Alam</option>
        <option value="Vokal">Vokal</option>
        <option value="English Club">English Club</option>
        <option value="Bela Diri">Bela Diri</option>
        <option value="Voli">Voli</option>
        <option value="Hadroh">Hadroh</option>
        <option value="Band">Band</option>
    </select>


    <input type="submit" value="Daftar">
</form>

    </div>
</body>
</html>
