-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2018 at 04:41 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `bahanbaku`
--

CREATE TABLE `bahanbaku` (
  `id_bahan` char(5) NOT NULL,
  `nama_bahan` varchar(30) DEFAULT NULL,
  `total` int(5) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahanbaku`
--

INSERT INTO `bahanbaku` (`id_bahan`, `nama_bahan`, `total`, `satuan`) VALUES
('B0001', 'Pasta', 50, 'kg'),
('B0002', 'Telur', 30, 'Kg'),
('B0003', 'Bawang Putih', 90, 'Kg'),
('B0004', 'Olive Oil', 45, 'Liter'),
('B0005', 'Tomat', 30, 'Kg'),
('B0006', 'Wortel', 20, 'Kg'),
('B0007', 'Susu', 12, 'Liter'),
('B0008', 'Basil', 1, 'Kg'),
('B0009', 'Keju', 12, 'Kg'),
('B0010', 'Daging Sapi', 33, 'Kg');

-- --------------------------------------------------------

--
-- Table structure for table `bahan_menu`
--

CREATE TABLE `bahan_menu` (
  `id_menu` char(5) DEFAULT NULL,
  `id_bahan` char(5) DEFAULT NULL,
  `jumlah` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan_menu`
--

INSERT INTO `bahan_menu` (`id_menu`, `id_bahan`, `jumlah`) VALUES
('M0001', 'B0004', 1),
('M0001', 'B0003', 12),
('M0002', 'B0004', 2),
('M0003', 'B0001', 3),
('M0004', 'B0003', 20),
('M0003', 'B0002', 0),
('M0003', 'B0002', 0),
('M0001', 'B0008', 0),
('M0002', 'B0009', 2),
('M0002', 'B0002', 3),
('M0001', 'B0003', 1),
('M0001', 'B0004', 1),
('M0001', 'B0001', 0),
('M0002', 'B0008', 1),
('M0002', 'B0010', 1),
('M0002', 'B0001', 1),
('M0002', 'B0006', 1),
('M0002', 'B0005', 1),
('M0003', 'B0002', 1),
('M0003', 'B0009', 1),
('M0003', 'B0007', 1),
('M0003', 'B0001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` char(5) NOT NULL,
  `nama_menu` varchar(30) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `harga` int(6) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `deskripsi`, `harga`, `foto`) VALUES
('M0001', 'aglio &amp; Olio', 'Bawang Putih dan Minyak', 40000, '05Feb2018-103736.jpg'),
('M0002', 'Bolognese', 'Saus Bolognise, daging, tomat, wortel dan basil', 50000, '05Feb2018-103906.jpg'),
('M0003', 'Carbonara', 'saus telur, keju dan daging', 50000, '05Feb2018-104006.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `penugasan`
--

CREATE TABLE `penugasan` (
  `id_penugasan` int(8) NOT NULL,
  `id_petugas` char(5) DEFAULT NULL,
  `jenis` varchar(10) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penugasan`
--

INSERT INTO `penugasan` (`id_penugasan`, `id_petugas`, `jenis`, `waktu`) VALUES
(17, 'P0004', 'antar', '2018-02-05 06:27:00'),
(18, 'P0004', 'antar', '2018-02-05 06:40:37'),
(19, 'P0004', 'antar', '2018-02-05 06:41:15'),
(20, 'P0004', 'antar', '2018-02-05 08:19:21'),
(21, 'P0005', 'antar', '2018-02-05 10:01:22');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` char(5) NOT NULL,
  `no_meja` char(5) NOT NULL,
  `total` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `no_meja`, `total`, `tanggal`, `status`) VALUES
('O0001', 'P0005', 19995, '2018-02-05 03:00:19', 'antar');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_menu`
--

CREATE TABLE `pesanan_menu` (
  `id_pesanan_menu` int(5) NOT NULL,
  `id_menu` char(5) DEFAULT NULL,
  `id_pesanan` char(5) DEFAULT NULL,
  `jumlah` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan_menu`
--

INSERT INTO `pesanan_menu` (`id_pesanan_menu`, `id_menu`, `id_pesanan`, `jumlah`) VALUES
(11, 'M0002', 'P0010', 1),
(12, 'M0003', 'P0011', 1),
(13, 'M0004', 'P0012', 7),
(14, 'M0001', 'P0012', 5),
(15, 'M0001', 'P0013', 4),
(16, 'M0002', 'P0013', 3),
(17, 'M0003', 'P0013', 1),
(18, 'M0004', 'P0013', 3),
(19, 'M0001', 'P0014', 1),
(20, 'M0001', 'O0001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` char(5) NOT NULL,
  `nama_petugas` varchar(30) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(34) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `status`) VALUES
('P0001', 'zaky', 'pantri', '4297f44b13955235245b2497399d7a93 ', 'pantri'),
('P0002', 'Manager', 'manager', '4297f44b13955235245b2497399d7a93 ', 'manager'),
('P0003', 'Pelayan', 'pelayan', '4297f44b13955235245b2497399d7a93 ', 'pelayan'),
('P0004', 'Koki', 'koki', '4297f44b13955235245b2497399d7a93 ', 'koki'),
('P0005', 'Meja1', 'Meja1', 'a271098719e7d62523a64c734135f401', 'Meja'),
('P0006', 'Meja2', 'Meja2', '21ee76715c8eb61b3b318412cb1e7a78', 'Meja'),
('P0007', 'Meja3', 'Meja3', '5a734e923c74378d58d594446cacfa43', 'Meja');

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
  MODIFY `id_penugasan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pesanan_menu`
--
ALTER TABLE `pesanan_menu`
  MODIFY `id_pesanan_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bahan_menu`
--
ALTER TABLE `bahan_menu`
  ADD CONSTRAINT `bahan_menu_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `bahan_menu_ibfk_2` FOREIGN KEY (`id_bahan`) REFERENCES `bahanbaku` (`id_bahan`);

--
-- Constraints for table `penugasan`
--
ALTER TABLE `penugasan`
  ADD CONSTRAINT `penugasan_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);

--
-- Constraints for table `pesanan_menu`
--
ALTER TABLE `pesanan_menu`
  ADD CONSTRAINT `pesanan_menu_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `pesanan_menu_ibfk_2` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
