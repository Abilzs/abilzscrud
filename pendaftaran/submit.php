<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Ekstrakurikuler - SMKN 3 Yogyakarta</title>
    <link rel="stylesheet" href="../css/style.css"> <!-- Hubungkan dengan file CSS eksternal -->
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
            <li><a href="index.php">Beranda</a></li>
            <li><a href="about.php">Tentang</a></li>
            <li><a href="contact.php">Kontak</a></li>
            
            <?php
            session_start(); // Memulai sesi
            if (isset($_SESSION['username'])) {
                // Jika pengguna sudah login, tampilkan tombol logout
                echo '<li><a href="../login/logout.php">Logout (' . htmlspecialchars($_SESSION['username']) . ')</a></li>';
            } else {
                // Jika pengguna belum login, tampilkan tombol login
                echo '<li><a href="login.php">Login</a></li>';
            }
            ?>
        </ul>
    </nav>

    <?php
include 'db_connect.php'; // Koneksi ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form dengan perlindungan dari serangan XSS
    $nama = htmlspecialchars($_POST['nama']);
    $kelas = htmlspecialchars($_POST['kelas']);
    $nomor_telepon = htmlspecialchars($_POST['Nomor_Telepon']);
    $ekstrakurikuler = htmlspecialchars($_POST['ekstrakurikuler']);

    // Query insert ke database
    $query = "INSERT INTO pendaftaran (nama, kelas, nomor_telepon, ekstrakurikuler) 
              VALUES ('$nama', '$kelas', '$nomor_telepon', '$ekstrakurikuler')";
    
    if (mysqli_query($conn, $query)) {  
        // Jika pendaftaran berhasil, redirect ke halaman pdfgenerate.php untuk membuat PDF
        echo "
    <div class='success-container'>
        <div class='container'>
        <h1>Pendaftaran Berhasil!</h1>
            <h1>Terima kasih, $nama!</h1>
            <p>Anda telah berhasil mendaftar pada ekstrakurikuler <strong>$ekstrakurikuler</strong>.</p>
            <div class='button-container'>
                <form action='pdfgenerate.php' method='POST'>
                    <input type='hidden' name='nama' value='$nama'>
                    <input type='hidden' name='kelas' value='$kelas'>
                    <input type='hidden' name='Nomor_Telepon' value='$nomor_telepon'>
                    <input type='hidden' name='ekstrakurikuler' value='$ekstrakurikuler'>
                    <button type='submit' class='button'>Unduh Detail Pendaftaran (WAJIB)</button>
                </form>
                <a href='../login/index.php' class='button'style='margin-top: 10px;'>Kembali ke Halaman Beranda</a>
            </div>
        </div>
    </div>
";

    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        echo "<div class='success-container'>
            <h2>Pendaftaran Gagal!</h2>
            <p>Terdapat masalah saat menyimpan data. Silakan coba lagi.</p>
            <div class='button-container'>
                <a href='../login/index.php'><button>Kembali ke Halaman Utama</button></a>
            </div>
        </div>";
    }

    // Tutup koneksi
    mysqli_close($conn);
} else {
    // Jika halaman diakses secara langsung tanpa form submission
    echo "
    <div class='error-container'>
        <h2>Akses Tidak Sah!</h2>
        <p>Halaman ini hanya dapat diakses setelah pengiriman form.</p>
        <div class='button-container'>
            <a href='../login/index.php' class='button'>Kembali ke Halaman Utama</a>
        </div>
    </div>";
}
?>