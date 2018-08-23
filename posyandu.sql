-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2016 at 06:20 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE IF NOT EXISTS `anak` (
  `id_anak` varchar(20) NOT NULL,
  `nama_anak` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `panjang_badan` int(11) NOT NULL,
  `berat_lahir` int(11) NOT NULL,
  `lingkar_kepala` int(11) NOT NULL,
  PRIMARY KEY (`id_anak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`id_anak`, `nama_anak`, `tanggal_lahir`, `jenis_kelamin`, `nama_ibu`, `nama_ayah`, `alamat`, `panjang_badan`, `berat_lahir`, `lingkar_kepala`) VALUES
('B0001', 'Syaiful Nazar', '2016-11-30', 'L', 'Khoimaroh', 'Kartaji', 'Sambogunung', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi`
--

CREATE TABLE IF NOT EXISTS `imunisasi` (
  `id_imunisasi` int(11) NOT NULL,
  `jenis_imunisasi` varchar(20) NOT NULL,
  `usia_wajib` varchar(10) NOT NULL,
  PRIMARY KEY (`id_imunisasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imunisasi`
--

INSERT INTO `imunisasi` (`id_imunisasi`, `jenis_imunisasi`, `usia_wajib`) VALUES
(1, 'BCG', '6'),
(2, 'DPT 1', '');

-- --------------------------------------------------------

--
-- Table structure for table `kematian`
--

CREATE TABLE IF NOT EXISTS `kematian` (
  `id_kematian` int(11) NOT NULL,
  `id_anak` int(11) NOT NULL,
  `tanggal_kematian` date NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kematian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kematian`
--

INSERT INTO `kematian` (`id_kematian`, `id_anak`, `tanggal_kematian`, `keterangan`) VALUES
(1, 1, '2016-10-09', 'Kecelakaan'),
(2, 1, '2016-10-25', 'Sakit'),
(3, 1, '2016-10-19', 'Kecelakaan');

-- --------------------------------------------------------

--
-- Table structure for table `penimbangan`
--

CREATE TABLE IF NOT EXISTS `penimbangan` (
  `id_penimbangan` varchar(20) NOT NULL,
  `id_anak` int(11) NOT NULL,
  `tanggal_timbang` date NOT NULL,
  `usia` varchar(20) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `lingkar_perut` int(11) NOT NULL,
  `id_imunisasi` int(11) NOT NULL,
  `id_vitamin` int(11) NOT NULL,
  `saran` varchar(50) NOT NULL,
  PRIMARY KEY (`id_penimbangan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vitamin`
--

CREATE TABLE IF NOT EXISTS `vitamin` (
  `id_vitamin` int(11) NOT NULL,
  `jenis_vitamin` varchar(20) NOT NULL,
  `usia_wajib` varchar(10) NOT NULL,
  PRIMARY KEY (`id_vitamin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vitamin`
--

INSERT INTO `vitamin` (`id_vitamin`, `jenis_vitamin`, `usia_wajib`) VALUES
(1, 'Vitamin A Biru', ''),
(2, 'Vitamin A Merah', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
