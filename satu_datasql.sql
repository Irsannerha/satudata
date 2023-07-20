-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jul 2023 pada 14.16
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satu_data`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bkd_golongan_jenis_kelamin`
--

CREATE TABLE `bkd_golongan_jenis_kelamin` (
  `id_golongan_jenis_kelamin` varchar(20) NOT NULL,
  `pria` int(11) NOT NULL,
  `wanita` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_opd` int(11) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bkd_golongan_umur`
--

CREATE TABLE `bkd_golongan_umur` (
  `id_golongan` varchar(20) NOT NULL,
  `62` int(11) NOT NULL,
  `20-25` int(11) NOT NULL,
  `26-30` int(11) NOT NULL,
  `31-35` int(11) NOT NULL,
  `36-40` int(11) NOT NULL,
  `41-45` int(11) NOT NULL,
  `46-50` int(11) NOT NULL,
  `51-55` int(11) NOT NULL,
  `56-58` int(11) NOT NULL,
  `58-60` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_opd` int(11) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bkd_pendidikan`
--

CREATE TABLE `bkd_pendidikan` (
  `id_pendidikan` varchar(20) NOT NULL,
  `pria` int(11) NOT NULL,
  `wanita` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_opd` int(11) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bkd_umur`
--

CREATE TABLE `bkd_umur` (
  `id_umur` varchar(20) NOT NULL,
  `pria` int(11) NOT NULL,
  `wanita` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_opd` int(11) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dinsos`
--

CREATE TABLE `dinsos` (
  `kecamatan` varchar(50) NOT NULL,
  `jumlah_individu` int(11) DEFAULT NULL,
  `jumlah_keluarga` int(11) DEFAULT NULL,
  `id_opd` int(11) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dishub`
--

CREATE TABLE `dishub` (
  `bulan` varchar(10) NOT NULL,
  `truck_pick_up` int(11) DEFAULT NULL,
  `bus` int(11) DEFAULT NULL,
  `oplet` int(11) DEFAULT NULL,
  `id_opd` int(11) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskes`
--

CREATE TABLE `diskes` (
  `id_sarana` int(11) NOT NULL,
  `rawat_inap` int(11) DEFAULT NULL,
  `non_rawat_inap` int(11) DEFAULT NULL,
  `id_opd` int(11) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dispan`
--

CREATE TABLE `dispan` (
  `komoditas` varchar(50) NOT NULL,
  `total` int(11) DEFAULT NULL,
  `kebutuhan` int(11) DEFAULT NULL,
  `stok_akhir` int(11) DEFAULT NULL,
  `id_opd` int(11) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dispentani`
--

CREATE TABLE `dispentani` (
  `nama_tanaman` varchar(50) NOT NULL,
  `luas_tanaman` int(11) DEFAULT NULL,
  `luas_rusak` int(11) DEFAULT NULL,
  `luas_penanaman` int(11) DEFAULT NULL,
  `id_opd` int(11) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dispu_flyover_underpass`
--

CREATE TABLE `dispu_flyover_underpass` (
  `nama_flyover` varchar(50) NOT NULL,
  `ukuran_flyover` varchar(50) DEFAULT NULL,
  `kondisi_flyover` varchar(50) DEFAULT NULL,
  `tahun_pembuatan` int(11) DEFAULT NULL,
  `id_opd` int(11) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dispu_jenis_permukaan_jalan`
--

CREATE TABLE `dispu_jenis_permukaan_jalan` (
  `tahun` int(11) NOT NULL,
  `jenis_permukaan_jalan` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `id_opd` int(11) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dispu_panjang_jalan`
--

CREATE TABLE `dispu_panjang_jalan` (
  `tahun` int(11) NOT NULL,
  `kondisi` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `id_opd` int(11) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_opd`
--

CREATE TABLE `tabel_opd` (
  `id_opd` int(11) NOT NULL,
  `nama_opd` varchar(255) DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL,
  `icon` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_opd`
--

INSERT INTO `tabel_opd` (`id_opd`, `nama_opd`, `id_tahun`, `icon`) VALUES
(1231, 'DINAS SOSIAL', 1, 'vendors/images/opd.png'),
(1232, 'DINSOS', 2, 'vendors/images/opd.png'),
(1233, 'DINSOS', 3, 'vendors/images/opd.png'),
(1234, 'DISHUB', 4, 'vendors/images/opd.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_tahun`
--

CREATE TABLE `tabel_tahun` (
  `id_tahun` int(11) NOT NULL,
  `tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_tahun`
--

INSERT INTO `tabel_tahun` (`id_tahun`, `tahun`) VALUES
(1, 2020),
(2, 2020),
(3, 2023),
(4, 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'kavizaahza', 'kavizaahza@mail.com', '421aa90e079fa326b6494f812ad13e79');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bkd_golongan_jenis_kelamin`
--
ALTER TABLE `bkd_golongan_jenis_kelamin`
  ADD PRIMARY KEY (`id_golongan_jenis_kelamin`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `bkd_golongan_umur`
--
ALTER TABLE `bkd_golongan_umur`
  ADD PRIMARY KEY (`id_golongan`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `bkd_pendidikan`
--
ALTER TABLE `bkd_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `bkd_umur`
--
ALTER TABLE `bkd_umur`
  ADD PRIMARY KEY (`id_umur`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `dinsos`
--
ALTER TABLE `dinsos`
  ADD PRIMARY KEY (`kecamatan`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `dishub`
--
ALTER TABLE `dishub`
  ADD PRIMARY KEY (`bulan`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `diskes`
--
ALTER TABLE `diskes`
  ADD PRIMARY KEY (`id_sarana`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `dispan`
--
ALTER TABLE `dispan`
  ADD PRIMARY KEY (`komoditas`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `dispentani`
--
ALTER TABLE `dispentani`
  ADD PRIMARY KEY (`nama_tanaman`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `dispu_flyover_underpass`
--
ALTER TABLE `dispu_flyover_underpass`
  ADD PRIMARY KEY (`nama_flyover`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `dispu_jenis_permukaan_jalan`
--
ALTER TABLE `dispu_jenis_permukaan_jalan`
  ADD PRIMARY KEY (`tahun`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `dispu_panjang_jalan`
--
ALTER TABLE `dispu_panjang_jalan`
  ADD PRIMARY KEY (`tahun`),
  ADD KEY `id_tahun` (`id_tahun`),
  ADD KEY `id_opd` (`id_opd`);

--
-- Indeks untuk tabel `tabel_opd`
--
ALTER TABLE `tabel_opd`
  ADD PRIMARY KEY (`id_opd`),
  ADD KEY `id_tahun` (`id_tahun`);

--
-- Indeks untuk tabel `tabel_tahun`
--
ALTER TABLE `tabel_tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bkd_golongan_jenis_kelamin`
--
ALTER TABLE `bkd_golongan_jenis_kelamin`
  ADD CONSTRAINT `bkd_golongan_jenis_kelamin_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `bkd_golongan_jenis_kelamin_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `bkd_golongan_umur`
--
ALTER TABLE `bkd_golongan_umur`
  ADD CONSTRAINT `bkd_golongan_umur_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `bkd_golongan_umur_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `bkd_pendidikan`
--
ALTER TABLE `bkd_pendidikan`
  ADD CONSTRAINT `bkd_pendidikan_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `bkd_pendidikan_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `bkd_umur`
--
ALTER TABLE `bkd_umur`
  ADD CONSTRAINT `bkd_umur_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `bkd_umur_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `dinsos`
--
ALTER TABLE `dinsos`
  ADD CONSTRAINT `dinsos_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `dinsos_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `dishub`
--
ALTER TABLE `dishub`
  ADD CONSTRAINT `dishub_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `dishub_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `diskes`
--
ALTER TABLE `diskes`
  ADD CONSTRAINT `diskes_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `diskes_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `dispan`
--
ALTER TABLE `dispan`
  ADD CONSTRAINT `dispan_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `dispan_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `dispentani`
--
ALTER TABLE `dispentani`
  ADD CONSTRAINT `dispentani_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `dispentani_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `dispu_flyover_underpass`
--
ALTER TABLE `dispu_flyover_underpass`
  ADD CONSTRAINT `dispu_flyover_underpass_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `dispu_flyover_underpass_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `dispu_jenis_permukaan_jalan`
--
ALTER TABLE `dispu_jenis_permukaan_jalan`
  ADD CONSTRAINT `dispu_jenis_permukaan_jalan_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `dispu_jenis_permukaan_jalan_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `dispu_panjang_jalan`
--
ALTER TABLE `dispu_panjang_jalan`
  ADD CONSTRAINT `dispu_panjang_jalan_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`),
  ADD CONSTRAINT `dispu_panjang_jalan_ibfk_2` FOREIGN KEY (`id_opd`) REFERENCES `tabel_opd` (`id_opd`);

--
-- Ketidakleluasaan untuk tabel `tabel_opd`
--
ALTER TABLE `tabel_opd`
  ADD CONSTRAINT `tabel_opd_ibfk_1` FOREIGN KEY (`id_tahun`) REFERENCES `tabel_tahun` (`id_tahun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
