-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 11:14 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codein`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`id` int(5) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `photo`) VALUES
(6, 'IMG20161210193507.jpg'),
(8, 'IMG20161210221323.jpg'),
(9, 'IMG20161218180857.jpg'),
(10, 'IMG20160707083741.jpg'),
(11, 'IMG20160504092059.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ktm`
--

CREATE TABLE IF NOT EXISTS `ktm` (
  `nama` varchar(50) NOT NULL,
  `nim` int(10) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
`id` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ktm`
--

INSERT INTO `ktm` (`nama`, `nim`, `ttl`, `jurusan`, `alamat`, `id`) VALUES
('Salsabiela Cahyahaq', 1541180066, 'Madiun, 8 September 1996', 'Teknik Informatika', 'Jalan Tanjung Raya', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
`id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `nip`, `tanggal`, `alamat`) VALUES
(2, 'Salsabiela Cahyahaq', 1541180066, '1996-08-09', 'Madiun'),
(3, 'Muhammad Al Fatih', 2147483647, '1986-09-01', 'Malang'),
(4, 'Devira Ramadhani Nurul Haq', 876275237, '2001-12-08', 'Madiun');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE IF NOT EXISTS `visitor` (
`id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` int(15) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `plans` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `name`, `address`, `email`, `telephone`, `destination`, `plans`) VALUES
(1, 'salsabiela cahyahaq', 'madiun', 'salsabiela_c@yahoo.com', 2147483647, 'ubud', 'KNLAKhsIOha'),
(5, 'devira', 'madiun', 'kakkakkakakakakk', 928767, 'lombok', 'kjdhfsk'),
(8, 'Ely Susilorini', 'Madiun', 'elys@gmail.com', 2147483647, 'ubud', 'saya ingin wisata');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ktm`
--
ALTER TABLE `ktm`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `ktm`
--
ALTER TABLE `ktm`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
