-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Sep 2024 pada 08.34
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abilzs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `ekstrakurikuler` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nama`, `kelas`, `nomor_telepon`, `ekstrakurikuler`) VALUES
(1, '1', '1', '1', 'Hadroh'),
(2, '1', '1', '1', 'Hadroh'),
(3, '1qwq', '1', '1', 'Hadroh'),
(4, 'aton', '14 TJ', '1218391731', 'Bulutangkis'),
(5, 'Febriyanto', 'XII Kelax', '088888888888', 'Bela Diri'),
(6, 'Oce Tempe', '14 TJ', '081222345677', 'Bela Diri'),
(7, 'Laudzaki', 'XII TJ', '088888888888', 'Karawitan'),
(8, 'Laudzaki', 'XII TJ', '088888888888', 'Karawitan'),
(9, 'Kitiw', '14 TJ', '088888888888', 'PMR'),
(10, 'Rangga Pasha Cucu Wibisono', 'XII TJ', '0812223456', 'Renang'),
(11, 'DIKA', 'XII TJ', '088888888888', 'Vokal'),
(12, 'DIKA', 'XII TJ', '088888888888', 'Vokal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'wqwre', 'ugqwuqgw@gmail.com', '$2y$10$HwLL4V2CxY.1JR8USC/qbetBzvy.Adie7BFJ5.nt9nBkMvb5M7aQG'),
(2, 'Abilzs', 'janismeganelisa30@gmail.com', '$2y$10$jbtX/3olSqYqH0szdY0k1uLNISR9lD.fhGF7JacI2VHFwH0IcUkyq'),
(3, 'Vino', 'hikikorel@gmail.com', '$2y$10$wl6LdULD0z.4kAz1ARdp8eHqU67LklCuQugC39k8Q8jXttoaR8fw2'),
(4, 'abilwanpis', 'ranggapasya3@gmail.com', '$2y$10$kcCfVjqI/G33aKctQtMQ0.vddh2zisS3FTczjm3Zdkrd0fuTz7.bm'),
(6, 'bagus', 'bagus@gmail.com', '$2y$10$G0cW2TKt2k1TMTxd.FADB.tKs4kpagkcDNI2SOXA5SrfJQemtuLGO'),
(8, 'tasya', 'tasya123@gmail.com', '$2y$10$viuhIkBhJwwspoI705H3Ke1qXmNWotbzDW/BnsHuDv9wSQGwmB4B.'),
(9, 'yoga', 'yoga123@gmail.com', '$2y$10$cxBXTMgfeg9v20QydHAWReQtj7T5XybriEawarQKS4ACRxrCDQpMq'),
(10, 'Difan', 'difan123@gmail.com', '$2y$10$a9MBwurox28uEJisRguNceSPsChM50Bia68b/8O18WG2Cv03k75Lq'),
(11, 'aw', 'aw@gmail.com', '$2y$10$R7YiO.i2Re3fiEMEqWozZ.9flCgfdrmcjQqaXAq81.LMy1VjNaEPu'),
(12, 'abil', 'abil@gmail.com', '$2y$10$7mKwJzDm26e/9ZQFog2rdOcJHlgs13aECRdyJrhEGk.im8B3aszMi'),
(13, 'aa', 'aa@gmail.com', '$2y$10$UeuXk5TLf/wg9DsSVmWPYORvQWNbX2banOAJ8kro5JD7pxPLrbdGm'),
(14, 'halo', 'halo12@gmail.com', '$2y$10$DKB4erWhsT6TCN6L95DVdOZq9sSkafecC4vq5c9/vubESG43lid.m'),
(15, 'febri', 'febri12@gmail.com', '$2y$10$KkJNIi44KjO8wHMA9cA8Q.MBDNnnE/hnvQ9Ysj6ZCjQCu253asJke'),
(16, 'fikar', 'fikar@gmail.com', '$2y$10$LYE3.jH/uKedVZV6hzGJ/./1EzzfU5mOY94jh7yZxP79VFZ9Ew7v6'),
(17, 'Laud', 'laud12@gmail.com', '$2y$10$vABjG7RPTM74scKlOoK5Cui.D.IXB/qSwBmCbfsz2diBywoYyNSOy');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
