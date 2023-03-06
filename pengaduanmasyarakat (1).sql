-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2023 at 08:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduanmasyarakat`
--

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` int(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`, `level`) VALUES
(1, 'wawa', 'nazwa', '555', '09875', 'masyarakat'),
(321, 'caul', 'admin', '234', '444', ''),
(2023, '321', 'gatau', '123', 'jomblo', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` int(16) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`) VALUES
(78, '2023-03-23', 1, 'jalan berlubang sangat dalam', '1243676.png', 'selesai'),
(79, '2023-03-22', 1, 'bendungan jebol', 'bendungan-jebol-banjir-terjang-brasil-3_169.jpeg', 'selesai'),
(80, '2023-03-21', 1, 'hdhdhd', 'samsudin.jpg', 'proses');

-- --------------------------------------------------------

--
-- Table structure for table `petugass`
--

CREATE TABLE `petugass` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugass`
--

INSERT INTO `petugass` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(12, 'asdasd', 'nazwa', '123', '67343214', 'admin'),
(444, 'caca', 'aul', '432', '000988', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(99, 9, '2023-07-06', 'apa yaaaa', 444),
(100, 64, '2023-03-02', 'sad', 444),
(101, 69, '2023-03-31', 'ngomong naon ai sia ', 444),
(102, 70, '2023-03-16', 'can cair ceu', 444),
(103, 64, '2023-03-05', 'baik akan saya bantu ', 12),
(104, 79, '2023-03-05', 'itumah ulah rakyat sendiri ', 444),
(105, 78, '2023-03-16', 'OKEOKE', 444),
(106, 79, '2023-03-11', 'ggg', 444),
(107, 80, '2023-03-07', 'kenapa masss', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `petugass`
--
ALTER TABLE `petugass`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_pengaduan` (`id_pengaduan`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `tanggapan_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugass` (`id_petugas`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
