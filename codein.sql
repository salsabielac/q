-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 13 Apr 2017 pada 01.14
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codein`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(5) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `photo`) VALUES
(31, 'C8jQK5MXcAAOn-P1.jpg'),
(39, 'IMG20160504092059.jpg'),
(40, 'IMG20161210221323.jpg'),
(41, 'IMG20160707083741.jpg'),
(42, 'IMG20161210193507.jpg'),
(43, 'IMG20161218180857.jpg'),
(44, 'IMG201605040920591.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ktm`
--

CREATE TABLE `ktm` (
  `nama` varchar(50) NOT NULL,
  `nim` int(10) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ktm`
--

INSERT INTO `ktm` (`nama`, `nim`, `ttl`, `jurusan`, `alamat`, `id`) VALUES
('Salsabiela Cahyahaq', 1541180066, 'Madiun, 8 September 1996', 'Teknik Informatika', 'Jalan Tanjung Raya', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `nip`, `tanggal`, `alamat`) VALUES
(2, 'Salsabiela Cahyahaq', 1541180066, '1996-08-09', 'Madiun'),
(3, 'Muhammad Al Fatih', 2147483647, '1986-09-01', 'Malang'),
(4, 'Devira Ramadhani Nurul Haq', 876275237, '2001-12-08', 'Madiun');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitor`
--

CREATE TABLE `visitor` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` int(15) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `plans` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `visitor`
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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `ktm`
--
ALTER TABLE `ktm`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
