-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2018 at 11:17 AM
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
('B0001', 'Minyak', 100, 'Liter'),
('B0002', 'Aci', 200, 'kg'),
('B0003', 'Kayu Bakar 2', 413, 'kg'),
('B0004', 'Cimin', 25, 'Kg');

-- --------------------------------------------------------

--
-- Table structure for table `bahan_menu`
--

CREATE TABLE `bahan_menu` (
  `id_bahan_menu` char(5) NOT NULL,
  `id_menu` char(5) DEFAULT NULL,
  `id_bahan` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` char(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_meja` varchar(2) NOT NULL,
  `total` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `nama`, `no_meja`, `total`, `tanggal`) VALUES
('1', 'zaky', '3', 31000, '2017-07-28 10:31:35'),
('10', 'Budi', '10', 54000, '2017-07-28 14:10:18'),
('11', 'Jajang', '1', 82000, '2017-07-28 14:15:19'),
('12', 'Zaky', '3', 34000, '2017-07-28 14:15:53'),
('2', '2', '2', 23000, '2017-07-28 10:38:00'),
('3', '111', '2', 59000, '2017-07-28 10:43:12'),
('4', 'Zaky', '20', 71000, '2017-07-28 11:34:50'),
('5', '', '', 0, '2017-07-28 11:38:33'),
('6', 'Zaky', '12', 128000, '2017-07-28 12:45:33'),
('7', 'Zaky', '1', 73000, '2017-07-28 13:15:47'),
('8', 'Zaky Muhammad', '1', 107000, '2017-07-28 14:06:29'),
('9', 'Dadang', '2', 102000, '2017-07-28 14:06:56');

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
('P0002', 'Manager', 'Manager', 'ae94be3cd532ce4a025884819eb08c98', 'Manager'),
('P0003', 'Pelayan', 'Pelayan', 'ac8e3cdbddddc8b8928b18cdfc0b008c', 'Pelayan'),
('P0004', 'Koki', 'Koki', '8b3df7b807ef060d8e8a416a3ba17eae', 'Koki');

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
  ADD PRIMARY KEY (`id_bahan_menu`),
  ADD KEY `id_menu` (`id_menu`),
  ADD KEY `id_bahan` (`id_bahan`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

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
-- AUTO_INCREMENT for table `pesanan_menu`
--
ALTER TABLE `pesanan_menu`
  MODIFY `id_pesanan_menu` int(5) NOT NULL AUTO_INCREMENT;

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
-- Constraints for table `pesanan_menu`
--
ALTER TABLE `pesanan_menu`
  ADD CONSTRAINT `pesanan_menu_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `pesanan_menu_ibfk_2` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
