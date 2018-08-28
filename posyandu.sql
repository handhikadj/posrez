-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 04:48 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `id_anak` varchar(20) NOT NULL,
  `nama_anak` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `panjang_badan` int(11) NOT NULL,
  `berat_lahir` int(11) NOT NULL,
  `lingkar_kepala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`id_anak`, `nama_anak`, `tanggal_lahir`, `jenis_kelamin`, `nama_ibu`, `nama_ayah`, `alamat`, `panjang_badan`, `berat_lahir`, `lingkar_kepala`) VALUES
('B0001', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00010', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00011', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00012', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00013', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00014', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00015', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00016', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00017', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00018', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00019', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B0002', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00020', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00021', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00022', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00023', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00024', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00025', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00026', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00027', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00028', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00029', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B0003', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00030', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00031', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00032', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00033', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00034', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00035', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00036', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00037', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00038', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00039', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B0004', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00040', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00041', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00042', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00043', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00044', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00045', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00046', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00047', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00048', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B00049', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B0005', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B0006', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B0007', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B0008', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0),
('B0009', 'asdasda', '2017-07-27', 'Laki-laki', 'asdasd', 'asdasd', 'asdasd', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi`
--

CREATE TABLE `imunisasi` (
  `id_imunisasi` int(11) NOT NULL,
  `jenis_imunisasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imunisasi`
--

INSERT INTO `imunisasi` (`id_imunisasi`, `jenis_imunisasi`) VALUES
(1, 'BCG'),
(2, 'DPT 1');

-- --------------------------------------------------------

--
-- Table structure for table `kematian`
--

CREATE TABLE `kematian` (
  `id_kematian` varchar(20) NOT NULL,
  `id_anak` varchar(20) NOT NULL,
  `tanggal_kematian` date NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `stat` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kematian`
--

INSERT INTO `kematian` (`id_kematian`, `id_anak`, `tanggal_kematian`, `keterangan`, `stat`) VALUES
('K0001', 'B00010', '2018-08-21', 'zzczxc', 1);

-- --------------------------------------------------------

--
-- Table structure for table `penimbangan`
--

CREATE TABLE `penimbangan` (
  `id_penimbangan` varchar(20) NOT NULL,
  `id_anak` varchar(20) NOT NULL,
  `tanggal_timbang` date NOT NULL,
  `usia` varchar(20) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `lingkar_perut` int(11) NOT NULL,
  `id_imunisasi` int(11) NOT NULL,
  `id_vitamin` int(11) NOT NULL,
  `saran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vitamin`
--

CREATE TABLE `vitamin` (
  `id_vitamin` int(11) NOT NULL,
  `jenis_vitamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vitamin`
--

INSERT INTO `vitamin` (`id_vitamin`, `jenis_vitamin`) VALUES
(1, 'Vitamin A Biru'),
(2, 'Vitamin A Merah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id_anak`);

--
-- Indexes for table `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD PRIMARY KEY (`id_imunisasi`);

--
-- Indexes for table `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`id_kematian`),
  ADD KEY `id_anak` (`id_anak`);

--
-- Indexes for table `penimbangan`
--
ALTER TABLE `penimbangan`
  ADD PRIMARY KEY (`id_penimbangan`),
  ADD KEY `id_anak` (`id_anak`),
  ADD KEY `penimbangan_imun` (`id_imunisasi`),
  ADD KEY `penimbangan_vitamin` (`id_vitamin`);

--
-- Indexes for table `vitamin`
--
ALTER TABLE `vitamin`
  ADD PRIMARY KEY (`id_vitamin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kematian`
--
ALTER TABLE `kematian`
  ADD CONSTRAINT `kematian_ibfk_1` FOREIGN KEY (`id_anak`) REFERENCES `anak` (`id_anak`) ON DELETE CASCADE;

--
-- Constraints for table `penimbangan`
--
ALTER TABLE `penimbangan`
  ADD CONSTRAINT `penimbangan_ibfk_1` FOREIGN KEY (`id_anak`) REFERENCES `anak` (`id_anak`),
  ADD CONSTRAINT `penimbangan_imun` FOREIGN KEY (`id_imunisasi`) REFERENCES `imunisasi` (`id_imunisasi`),
  ADD CONSTRAINT `penimbangan_vitamin` FOREIGN KEY (`id_vitamin`) REFERENCES `vitamin` (`id_vitamin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
