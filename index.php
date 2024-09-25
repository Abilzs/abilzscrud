<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler - SMKN 3 Yogyakarta</title>
    <link rel="stylesheet" href="stail.css">
    <link rel="icon" type="image/x-icon" href="gambar/skm.png">

</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="logo">
            <img src="skm.png" alt="Logo SMKN 3 Yogyakarta">
            <a>SMKN 3 Yogyakarta</a>
        </div>
        <ul>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="about.php">Tentang</a></li>
            <li><a href="contact.php">Kontak</a></li>
            <?php
            session_start();
            if (isset($_SESSION['username'])) {
                echo '<li><a href="logout.php">Logout (' . htmlspecialchars($_SESSION['username']) . ')</a></li>';
            } else {
                echo '<li><a href="login.php">Login</a></li>';
            }
            ?>
        </ul>
    </nav>

    <!-- Konten Utama -->
    <div class="container">
        <h1>Daftar Ekstrakurikuler di SMKN 3 Yogyakarta</h1>
        <p>Berikut adalah daftar ekstrakurikuler yang tersedia di SMKN 3 Yogyakarta:</p>


        <!-- Kartu untuk setiap ekstrakurikuler -->
        <div id="cards">
            <div id="pramuka" class="card">
                <h3>Pramuka</h3>
                <p>Mengajarkan kedisiplinan, kemandirian, dan kecintaan terhadap alam.</p>
                <img src="gambar/pramuka.jpg" alt="Pramuka">
            </div>
            <div id="tonti" class="card">
                <h3>Tonti</h3>
                <p>Berfokus pada pelatihan baris-berbaris serta nilai kepemimpinan.</p>
                <img src="gambar/tonti.jpg" alt="Tonti">
            </div>
            <div id="futsal" class="card">
                <h3>Futsal</h3>
                <p>Olahraga yang berfokus pada keterampilan bermain bola dalam tim kecil.</p>
                <img src="gambar/futsal.png" alt="Futsal">
            </div>
            <div id="basket" class="card">
                <h3>Basket</h3>
                <p>Mengembangkan kemampuan atletik serta kerja sama tim.</p>
                <img src="gambar/basket.jfif" alt="Basket">
            </div>
            <div id="pmr" class="card">
                <h3>PMR</h3>
                <p>Kegiatan yang fokus pada pelatihan pertolongan pertama, kepemimpinan, dan kegiatan sosial kemanusiaan.</p>
                <img src="gambar/pmr.jfif" alt="PMR">
            </div>
            <div id="renang" class="card">
                <h3>Renang</h3>
                <p>Olahraga berenang untuk kebugaran dan keterampilan di dalam air.</p>
                <img src="gambar/renang.jfif" alt="Renang">
            </div>
            <div id="karawitan" class="card">
                <h3>Karawitan</h3>
                <p>Seni musik tradisional Jawa dengan alat musik gamelan.</p>
                <img src="gambar/karawitan.jpg" alt="Karawitan">
            </div>
            <div id="bulutangkis" class="card">
                <h3>Bulutangkis</h3>
                <p>Olahraga raket memukul shuttlecock melalui net.</p>
                <img src="gambar/bulutangkis.jpg" alt="Bulutangkis">
            </div>
            <div id="pecinta-alam" class="card">
                <h3>Pecinta Alam</h3>
                <p>Kegiatan luar ruangan seperti hiking dan camping untuk mencintai alam.</p>
                <img src="gambar/pecinta-alam.jpg" alt="Pecinta Alam">
            </div>
            <div id="vokal" class="card">
                <h3>Vokal</h3>
                <p>Latihan bernyanyi dan teknik vokal.</p>
                <img src="gambar/vokal.jpg" alt="Vokal">
            </div>
            <div id="english-club" class="card">
                <h3>English Club</h3>
                <p>Klub untuk meningkatkan kemampuan bahasa Inggris.</p>
                <img src="gambar/englishclub.jpg" alt="English Club">
            </div>
            <div id="bela-diri" class="card">
                <h3>Bela Diri</h3>
                <p>Latihan teknik pertahanan diri dan olahraga tempur.</p>
                <img src="gambar/beladiri.jpg" alt="Bela Diri">
            </div>
            <div id="voli" class="card">
                <h3>Voli</h3>
                <p>Olahraga tim yang bertujuan memukul bola melewati net ke area lawan.</p>
                <img src="gambar/voli.jpg" alt="Voli">
            </div>
            <div id="hadroh" class="card">
                <h3>Hadroh</h3>
                <p>Kesenian musik Islami yang menggunakan alat musik rebana untuk mengiringi lantunan shalawat.</p>
                <img src="gambar/hadroh.jpg" alt="Hadroh">
            </div>
            <div id="band" class="card">
                <h3>Band</h3>
                <p>Ekstrakurikuler yang melibatkan bermain musik bersama dalam grup, biasanya menggunakan alat musik modern seperti gitar, drum, dan keyboard.</p>
                <img src="gambar/band.jpeg" alt="Band">
            </div>
        </div>

        <a href="pendaftaran.php"><button class="buttonbalik">Masuk ke Halaman Pendaftaran</button></a>
    </div>

    <script>
        function showCard(id) {
            // Sembunyikan semua kartu
            var cards = document.querySelectorAll('.card');
            cards.forEach(function(card) {
                card.style.display = 'none';
            });

            // Tampilkan kartu yang dipilih
            var selectedCard = document.getElementById(id);
            if (selectedCard) {
                selectedCard.style.display = 'block';
            }
        }

         var currentCardId = null; // Variabel global untuk menyimpan ID kartu yang saat ini ditampilkan

    function showCard(id) {
        // Sembunyikan semua kartu
        var cards = document.querySelectorAll('.card');
        cards.forEach(function(card) {
            card.style.display = 'none';
        });

        // Cek apakah tombol yang sama ditekan lagi
        if (currentCardId === id) {
            currentCardId = null; // Reset jika kartu yang sama ditekan
        } else {
            currentCardId = id; // Simpan ID kartu yang baru dipilih
            var selectedCard = document.getElementById(id);
            if (selectedCard) {
                selectedCard.style.display = 'block'; // Tampilkan kartu yang dipilih
            }
        }
    }   
    </script>
</body>
</html>