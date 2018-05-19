-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2018 at 04:55 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lombok`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `idberita` int(11) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`idberita`, `judul`, `foto`) VALUES
(1, 'BKPSDM Lombok Timur Belum Terima Laporan', 'HARI-PERTAMA-KERJA-218x150.jpg'),
(3, 'Konten Pembelajaran K13 Direvisi', 'k13-218x150.jpg'),
(4, 'Muaythai Usulkan 4 Atlet Masuk Pelatda', 'MUAYTHAI-218x150.jpg'),
(5, 'Soft Launching Aplikasi â€˜â€™Go Obvit ï', 'F-BOKS-BARU-218x150.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lobar`
--

CREATE TABLE `lobar` (
  `idberita` int(11) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lobar`
--

INSERT INTO `lobar` (`idberita`, `judul`, `foto`) VALUES
(1, 'Proyek Pipa SPAM di Merembu Lombok Barat', 'PIPA SPAM.jpg'),
(2, 'Reklamasi Ilegal di Pelabuhan Lembar Mas', 'REKLAMASI-1-696x364.jpg'),
(3, 'Warga Tiga Dusun Terisolir di Lombok Bar', 'F-AA-JEMBATAN-696x364.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `loteng`
--

CREATE TABLE `loteng` (
  `idberita` int(11) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loteng`
--

INSERT INTO `loteng` (`idberita`, `judul`, `foto`) VALUES
(1, 'Ini Data Kerugian Akibat Puting Beliung ', 'F-BENCANA-696x364.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lotim`
--

CREATE TABLE `lotim` (
  `idberita` int(11) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lotim`
--

INSERT INTO `lotim` (`idberita`, `judul`, `foto`) VALUES
(1, '130 Ribu Warga Lombok Timur Belum Lakuka', 'E-KTP-696x364.jpg'),
(2, 'Proyek Taman Rinjani Selong Gagal', 'PROYEK-GAGAL-696x364.jpg'),
(3, 'RSUD dr Soedjono Selong Lulus Akreditasi', 'PELAYANAN-696x364.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lout`
--

CREATE TABLE `lout` (
  `idberita` int(11) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lout`
--

INSERT INTO `lout` (`idberita`, `judul`, `foto`) VALUES
(1, 'Eks Bangunan RSUD Lombok Utara Dirobohka', 'FA-ROBOH-696x364.jpg'),
(2, 'Lombok Utara Dapat Bantuan Kapal Berlaya', 'kapal-bantuan-696x364.jpg'),
(3, 'PT BAL Kembali Beroperasi', 'gili-meno-lombok-696x364.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`idberita`);

--
-- Indexes for table `lobar`
--
ALTER TABLE `lobar`
  ADD PRIMARY KEY (`idberita`);

--
-- Indexes for table `loteng`
--
ALTER TABLE `loteng`
  ADD PRIMARY KEY (`idberita`);

--
-- Indexes for table `lotim`
--
ALTER TABLE `lotim`
  ADD PRIMARY KEY (`idberita`);

--
-- Indexes for table `lout`
--
ALTER TABLE `lout`
  ADD PRIMARY KEY (`idberita`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `idberita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `lobar`
--
ALTER TABLE `lobar`
  MODIFY `idberita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `loteng`
--
ALTER TABLE `loteng`
  MODIFY `idberita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lotim`
--
ALTER TABLE `lotim`
  MODIFY `idberita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lout`
--
ALTER TABLE `lout`
  MODIFY `idberita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
