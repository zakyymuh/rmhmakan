-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Feb 2018 pada 03.32
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahmakan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahanbaku`
--

CREATE TABLE `bahanbaku` (
  `id_bahan` char(5) NOT NULL,
  `nama_bahan` varchar(30) DEFAULT NULL,
  `total` int(5) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bahanbaku`
--

INSERT INTO `bahanbaku` (`id_bahan`, `nama_bahan`, `total`, `satuan`) VALUES
('B0001', 'Minyak', 100, 'Liter'),
('B0002', 'Aci', 200, 'kg'),
('B0003', 'Kayu Bakar 2', 413, 'kg'),
('B0004', 'Cimin', 25, 'Kg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_menu`
--

CREATE TABLE `bahan_menu` (
  `id_menu` char(5) DEFAULT NULL,
  `id_bahan` char(5) DEFAULT NULL,
  `jumlah` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bahan_menu`
--

INSERT INTO `bahan_menu` (`id_menu`, `id_bahan`, `jumlah`) VALUES
('M0001', 'B0004', 1),
('M0001', 'B0003', 12),
('M0002', 'B0004', 2),
('M0003', 'B0001', 3),
('M0004', 'B0003', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` char(5) NOT NULL,
  `nama_menu` varchar(30) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `harga` int(6) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `deskripsi`, `harga`, `foto`) VALUES
('M0001', 'Susu coklat', 'susu asli dua kelinci yang sanggaatt melegenda', 19995, '04Feb2018-110628.jpg'),
('M0002', 'Jeruk', 'Jeruk adalah jeruk purut yang jeruk', 30000, '04Feb2018-112243.jpg'),
('M0003', 'Ayam bakaka hahaha', 'ayam adalah bakak cinta yang asri', 29000, '04Feb2018-112318.jpg'),
('M0004', 'Ayam Ketawa', 'ayam ini gapernah berheti ketawa, bahkan sampai mau mati', 32000, '05Feb2018-122826.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penugasan`
--

CREATE TABLE `penugasan` (
  `id_penugasan` int(8) NOT NULL,
  `id_petugas` char(5) DEFAULT NULL,
  `jenis` varchar(10) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penugasan`
--

INSERT INTO `penugasan` (`id_penugasan`, `id_petugas`, `jenis`, `waktu`) VALUES
(17, 'P0004', 'antar', '2018-02-05 06:27:00'),
(18, 'P0004', 'antar', '2018-02-05 06:40:37'),
(19, 'P0004', 'antar', '2018-02-05 06:41:15'),
(20, 'P0004', 'antar', '2018-02-05 08:19:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` char(5) NOT NULL,
  `no_meja` varchar(2) NOT NULL,
  `total` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `no_meja`, `total`, `tanggal`, `status`) VALUES
('P0010', '1', 30000, '2018-02-04 17:00:00', 'antar'),
('P0011', '1', 158975, '2018-02-04 18:06:48', 'antar'),
('P0012', '1', 323975, '2018-02-04 18:08:51', 'antar'),
('P0013', '1', 294980, '2018-02-04 18:09:42', 'antar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_menu`
--

CREATE TABLE `pesanan_menu` (
  `id_pesanan_menu` int(5) NOT NULL,
  `id_menu` char(5) DEFAULT NULL,
  `id_pesanan` char(5) DEFAULT NULL,
  `jumlah` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan_menu`
--

INSERT INTO `pesanan_menu` (`id_pesanan_menu`, `id_menu`, `id_pesanan`, `jumlah`) VALUES
(11, 'M0002', 'P0010', 1),
(12, 'M0003', 'P0011', 1),
(13, 'M0004', 'P0012', 7),
(14, 'M0001', 'P0012', 5),
(15, 'M0001', 'P0013', 4),
(16, 'M0002', 'P0013', 3),
(17, 'M0003', 'P0013', 1),
(18, 'M0004', 'P0013', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` char(5) NOT NULL,
  `nama_petugas` varchar(30) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(34) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `status`) VALUES
('P0001', 'zaky', 'pantri', '4297f44b13955235245b2497399d7a93 ', 'pantri'),
('P0002', 'Manager', 'manager', '4297f44b13955235245b2497399d7a93 ', 'manager'),
('P0003', 'Pelayan', 'pelayan', '4297f44b13955235245b2497399d7a93 ', 'pelayan'),
('P0004', 'Koki', 'koki', '4297f44b13955235245b2497399d7a93 ', 'koki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahanbaku`
--
ALTER TABLE `bahanbaku`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `bahan_menu`
--
ALTER TABLE `bahan_menu`
  ADD KEY `id_menu` (`id_menu`),
  ADD KEY `id_bahan` (`id_bahan`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `penugasan`
--
ALTER TABLE `penugasan`
  ADD PRIMARY KEY (`id_penugasan`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `pesanan_menu`
--
ALTER TABLE `pesanan_menu`
  ADD PRIMARY KEY (`id_pesanan_menu`),
  ADD KEY `id_menu` (`id_menu`),
  ADD KEY `id_pesanan` (`id_pesanan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penugasan`
--
ALTER TABLE `penugasan`
  MODIFY `id_penugasan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `pesanan_menu`
--
ALTER TABLE `pesanan_menu`
  MODIFY `id_pesanan_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bahan_menu`
--
ALTER TABLE `bahan_menu`
  ADD CONSTRAINT `bahan_menu_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `bahan_menu_ibfk_2` FOREIGN KEY (`id_bahan`) REFERENCES `bahanbaku` (`id_bahan`);

--
-- Ketidakleluasaan untuk tabel `penugasan`
--
ALTER TABLE `penugasan`
  ADD CONSTRAINT `penugasan_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);

--
-- Ketidakleluasaan untuk tabel `pesanan_menu`
--
ALTER TABLE `pesanan_menu`
  ADD CONSTRAINT `pesanan_menu_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `pesanan_menu_ibfk_2` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
