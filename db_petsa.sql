-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 07:07 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_petsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id_admin` int(20) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `password_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id_admin`, `email_admin`, `password_admin`) VALUES
(1, 'admin@email.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `data_adopsi`
--

CREATE TABLE `data_adopsi` (
  `id` int(10) NOT NULL,
  `foto_adopter` varchar(255) NOT NULL,
  `nama_adopter` varchar(255) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `lokasi_adopter` varchar(255) NOT NULL,
  `nama_hewan` varchar(255) NOT NULL,
  `jenis_hewan` varchar(100) NOT NULL,
  `usia_hewan` varchar(255) NOT NULL,
  `gender_hewan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_adopsi`
--

INSERT INTO `data_adopsi` (`id`, `foto_adopter`, `nama_adopter`, `no_telepon`, `lokasi_adopter`, `nama_hewan`, `jenis_hewan`, `usia_hewan`, `gender_hewan`) VALUES
(21, 'IMG_5903 (2).JPG', 'Adeariyan', '085157877191', 'Bandung', 'Beo', 'Burung', '3-<5', 'Jantan'),
(22, 'foto qolbu.jpeg', 'Qolbu Natasya', '08144325578', 'Jakarta', 'Luwak', 'Musang', '3-<5', 'Jantan'),
(23, 'foto jek.jpeg', 'Zack', '08588763456', 'Indramayu', 'Kacer', 'Burung', '1-<3', 'Jantan');

-- --------------------------------------------------------

--
-- Table structure for table `data_donasi`
--

CREATE TABLE `data_donasi` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `jenis_donasi` varchar(100) NOT NULL,
  `jumlah_donasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_donasi`
--

INSERT INTO `data_donasi` (`id`, `nama`, `no_telepon`, `pesan`, `jenis_donasi`, `jumlah_donasi`) VALUES
(2, 'jekk', '08299876567', 'semoga bermanfaat', 'Pribadi', '500.000'),
(3, 'adeariyan', '085157877191', 'Semoga donasi yang saya berikan bermanfaat dan membantu dalam pengadopsian hewan', 'Pribadi', '1.000.000'),
(4, 'qolbu', '0825576543', 'semoga aja membantu', 'Pribadi', '750.000'),
(5, 'Ilmu Komputer', '08577875211', 'semoga aja membantu', 'Kelompok', '5.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `data_search`
--

CREATE TABLE `data_search` (
  `id` int(10) NOT NULL,
  `foto_hewan` varchar(255) NOT NULL,
  `nama_hewan` varchar(255) NOT NULL,
  `jenis_hewan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_search`
--

INSERT INTO `data_search` (`id`, `foto_hewan`, `nama_hewan`, `jenis_hewan`) VALUES
(1, 'anjing_buldog.jpeg', 'Bulldog', 'Anjing'),
(2, 'anjing_cihua.jpg', 'Cihuahua', 'Anjing'),
(3, 'anjing_snow.jpg', 'Snowhite', 'Anjing'),
(4, 'burung_beo.jpg', 'Beo', 'Burung'),
(5, 'burung_kacer.jpg', 'Kacer', 'Burung'),
(6, 'burung_lovebird.jpg', 'Lovebird', 'Burung'),
(7, 'kelinci_miniear.jpg', 'Miniear', 'Kelinci'),
(8, 'kelinci_polandia.jpg', 'Polandia cokelat', 'Kelinci'),
(9, 'kucing oren.jpg', 'Oren', 'Kucing'),
(10, 'kucing_antartika.jpg', 'Antartika', 'Kucing'),
(11, 'kucing_bulan.jpg', 'Bulan', 'Kucing'),
(13, 'kurakura_gold.jpeg', 'gold', 'kura kura'),
(15, 'musang_jawa.jpg', 'jawa', 'musang'),
(16, 'musang_luwak.jpg', 'luwak', 'musang');

-- --------------------------------------------------------

--
-- Table structure for table `data_titip`
--

CREATE TABLE `data_titip` (
  `id` int(20) NOT NULL,
  `nama_hewan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `usia` varchar(10) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `status_kesehatan` varchar(100) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `alasan` varchar(255) NOT NULL,
  `jangka_waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_titip`
--

INSERT INTO `data_titip` (`id`, `nama_hewan`, `foto`, `catatan`, `jenis`, `usia`, `gender`, `status_kesehatan`, `lokasi`, `alasan`, `jangka_waktu`) VALUES
(10, 'Polandia', 'kelinci_polandia.jpg', 'Ade Ariyansyah // 085157877191\r\n ', 'Kucing', '1-<3', 'Jantan', 'Sehat', 'Bandung', 'Pergi  keluar kota', '4-6 hari'),
(11, 'Miniear', 'kelinci_miniear.jpg', 'Zack // 0826457991', 'Kelinci', '3-<5', 'Betina', 'Sehat', 'Indramayu', 'Ada Kerjaan Keluar Kota', '1-3 hari'),
(12, 'Lovebird', 'burung_lovebird.jpg', 'qolbu // 08215576890', 'Burung', '5-<7', 'Jantan', 'Sehat', 'Jakarta', 'Pergi  keluar kota', '1 bulan');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id` int(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `tempat_tanggal_lahir` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id`, `nama`, `email`, `no_telepon`, `tempat_tanggal_lahir`, `password`) VALUES
(3, 'adeariyan', 'adeariyan@upi.edu', '085157877191', '2021-01-29', 'ilmukomputer'),
(4, 'zack', 'zack@upi.edu', '08543367823', '2021-05-01', 'yaampun'),
(5, 'qolbu', 'qolbu@upi.edu', '0821667854324', '2021-05-13', 'bebas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_adopsi`
--
ALTER TABLE `data_adopsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_donasi`
--
ALTER TABLE `data_donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_search`
--
ALTER TABLE `data_search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_titip`
--
ALTER TABLE `data_titip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_adopsi`
--
ALTER TABLE `data_adopsi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `data_donasi`
--
ALTER TABLE `data_donasi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_search`
--
ALTER TABLE `data_search`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `data_titip`
--
ALTER TABLE `data_titip`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
