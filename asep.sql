-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
<<<<<<< HEAD
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 09:33 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8
=======
-- Host: localhost
-- Generation Time: Jul 26, 2020 at 04:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31
>>>>>>> 95c4b21a0d4f9cd9e84b2add1b3078ceedb8039e

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asep`
--

-- --------------------------------------------------------

--
-- Table structure for table `kuisioner`
--

CREATE TABLE `kuisioner` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `judul_kuisioner` varchar(500) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuisioner`
--

INSERT INTO `kuisioner` (`id`, `iduser`, `judul_kuisioner`, `deskripsi`) VALUES
<<<<<<< HEAD
(18, 2, 'Alan Walker - Alone', 'Ini adalah Manusia'),
(19, 2, 'Gambar 3', 'asdasdasd'),
(20, 2, 'Mesake Bangsaku', 'Anjay');
=======
(4, 2, 'telkom university', 'telkom university adalah suatu universitas');
>>>>>>> 95c4b21a0d4f9cd9e84b2add1b3078ceedb8039e

-- --------------------------------------------------------

--
-- Table structure for table `pearson`
--

CREATE TABLE `pearson` (
  `id` int(11) NOT NULL,
  `idKuisioner` int(11) NOT NULL,
<<<<<<< HEAD
  `idPertanyaan` int(11) NOT NULL,
=======
>>>>>>> 95c4b21a0d4f9cd9e84b2add1b3078ceedb8039e
  `rtable` float NOT NULL,
  `thitung` float NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pearson`
--

INSERT INTO `pearson` (`id`, `idKuisioner`, `idPertanyaan`, `rtable`, `thitung`, `status`) VALUES
(25, 16, 1, 0.95, 0.333333, 'Tidak Valid'),
(26, 16, 2, 0.95, 0.816497, 'Tidak Valid'),
(27, 16, 3, 0.95, 0.57735, 'Tidak Valid'),
(44, 18, 1, 0.707, 0.763, 'Valid'),
(45, 18, 2, 0.707, 0.744, 'Valid');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `idKuisioner` int(11) NOT NULL,
  `pertanyaan` varchar(500) NOT NULL,
  `jawabanA` varchar(500) NOT NULL,
  `jawabanB` varchar(500) NOT NULL,
  `jawabanC` varchar(500) NOT NULL,
  `jawabanD` varchar(500) NOT NULL,
  `bobotA` int(11) NOT NULL,
  `bobotB` int(11) NOT NULL,
  `bobotC` int(11) NOT NULL,
  `bobotD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `idKuisioner`, `pertanyaan`, `jawabanA`, `jawabanB`, `jawabanC`, `jawabanD`, `bobotA`, `bobotB`, `bobotC`, `bobotD`) VALUES
(7, 4, 'Apakah telkom sangat membantu?', 'sangat membantu', 'membantu', 'tidak membantu', 'sangat tidak membantu', 4, 3, 2, 1),
(8, 4, 'apakah kamu setuju jika telkom memberikan diskon bpp ?', 'setuju banget', 'setuju', 'tidak setuju ', 'sangat tidak setuju', 4, 3, 2, 1),
<<<<<<< HEAD
(9, 4, 'apakah kamu setuju jika telkom memberikan diskon ktm ?', 'sangat setuju', 'setuju', 'tidak setuju ', 'sangat tidak setuju', 4, 3, 2, 1),
(10, 6, 'Siapa Nama Saya', 'Rama', 'Rama Iswara', 'I Gusti Ngurah Rama ', 'I Gusti Ngurah Rama Iswara', 10, 25, 45, 100),
(11, 8, 'Siapa Nama Saya', 'Rama', 'Rama Iswara', 'I Gusti Ngurah Rama ', 'I Gusti Ngurah Rama Iswara', 10, 25, 45, 100),
(12, 8, 'Siapa Nama Saya', 'Rama', 'Rama Iswara', 'I Gusti Ngurah Rama ', 'I Gusti Ngurah Rama Iswara', 10, 25, 45, 100),
(13, 9, 'Siapa Nama Saya', 'Rama', 'Rama Iswara', 'I Gusti Ngurah Rama ', 'I Gusti Ngurah Rama Iswara', 10, 25, 45, 100),
(14, 11, 'Siapa Nama Saya', 'Rama', 'Rama Iswara', 'I Gusti Ngurah Rama ', 'I Gusti Ngurah Rama Iswara', 10, 25, 45, 100),
(15, 11, 'Siapa Nama Saya', 'Rama', 'Rama Iswara', 'I Gusti Ngurah Rama ', 'I Gusti Ngurah Rama Iswara', 10, 25, 45, 100),
(16, 13, 'Siapa Nama Saya', 'Rama', 'Rama Iswara', 'I Gusti Ngurah Rama ', 'I Gusti Ngurah Rama Iswara', 10, 25, 45, 100),
(17, 14, 'Siapa Nama Saya', 'Rama', 'Rama Iswara', 'I Gusti Ngurah Rama ', 'I Gusti Ngurah Rama Iswara', 10, 25, 45, 100),
(18, 14, 'Siapa Nama Saya', 'Rama', 'Rama Iswara', 'I Gusti Ngurah Rama ', 'I Gusti Ngurah Rama Iswara', 10, 25, 45, 100),
(19, 15, 'Apa Kabar ?', 'Baik', 'Buruk', 'Makan', 'Tidur', 1, 2, 3, 4),
(20, 15, 'Siapa Nama Saya', 'Rama', 'Rama Iswara', 'I Gusti Ngurah Rama ', 'I Gusti Ngurah Rama Iswara', 1, 2, 3, 4),
(21, 16, 'Siapa Nama Saya', 'Rama', 'Rama Iswara', 'I Gusti Ngurah Rama ', 'I Gusti Ngurah Rama Iswara', 4, 3, 2, 1),
(22, 16, 'Apa Kabar ?', 'Baik', 'Buruk', 'Makan', 'Tidur', 4, 3, 2, 1),
(23, 16, 'Tes ke 3', 'Bagus', 'kurang', 'lumayan', 'jelek', 4, 3, 2, 1),
(24, 17, 'Siapa Nama Saya', 'Rama', 'Rama Iswara', 'I Gusti Ngurah Rama ', 'I Gusti Ngurah Rama Iswara', 10, 25, 45, 100),
(25, 18, 'Siapa Nama Saya', 'Rama', 'Rama Iswara', 'I Gusti Ngurah Rama ', 'I Gusti Ngurah Rama Iswara', 1, 2, 3, 4),
(26, 18, 'Apa Kabar ?', 'Baik', 'Buruk', 'Makan', 'Tidur', 1, 2, 3, 4);
=======
(9, 4, 'apakah kamu setuju jika telkom memberikan diskon ktm ?', 'sangat setuju', 'setuju', 'tidak setuju ', 'sangat tidak setuju', 4, 3, 2, 1);
>>>>>>> 95c4b21a0d4f9cd9e84b2add1b3078ceedb8039e

-- --------------------------------------------------------

--
-- Table structure for table `responden`
--

CREATE TABLE `responden` (
  `id` int(11) NOT NULL,
  `idpertanyaan` int(11) NOT NULL,
  `idKuisioner` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `nilai` int(11) NOT NULL,
  `jawaban` varchar(500) NOT NULL,
  `orangKe` int(11) NOT NULL,
  `soalKe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `responden`
--

INSERT INTO `responden` (`id`, `idpertanyaan`, `idKuisioner`, `nama`, `email`, `nilai`, `jawaban`, `orangKe`, `soalKe`) VALUES
(20, 7, 4, 'Dadang Sudadang', 'dadang@dadang.com', 1, 'sangat tidak membantu', 1, 1),
(21, 8, 4, 'Dadang Sudadang', 'dadang@dadang.com', 1, 'sangat tidak setuju', 1, 2),
<<<<<<< HEAD
(22, 9, 4, 'Dadang Sudadang', 'dadang@dadang.com', 1, 'sangat tidak setuju', 1, 3),
(23, 14, 11, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 25, 'Rama Iswara', 1, 1),
(24, 15, 11, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 45, 'I Gusti Ngurah Rama ', 1, 2),
(25, 14, 11, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 25, 'Rama Iswara', 2, 1),
(26, 15, 11, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 100, 'I Gusti Ngurah Rama Iswara', 2, 2),
(27, 14, 11, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 25, 'Rama Iswara', 3, 1),
(28, 15, 11, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 100, 'I Gusti Ngurah Rama Iswara', 3, 2),
(29, 17, 14, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 10, 'Rama', 1, 1),
(30, 18, 14, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 45, 'I Gusti Ngurah Rama ', 1, 2),
(31, 19, 15, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 1, 'Baik', 1, 1),
(32, 20, 15, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 2, 'Rama Iswara', 1, 2),
(33, 19, 15, 'I Gusti Ngurah Rama Iswara', 'dreamlight098@gmail.com', 2, 'Buruk', 2, 1),
(34, 20, 15, 'I Gusti Ngurah Rama Iswara', 'dreamlight098@gmail.com', 3, 'I Gusti Ngurah Rama ', 2, 2),
(35, 19, 15, 'I Gusti Ngurah Rama Iswara', 'dreamer123@gmail.com', 1, 'Baik', 3, 1),
(36, 20, 15, 'I Gusti Ngurah Rama Iswara', 'dreamer123@gmail.com', 4, 'I Gusti Ngurah Rama Iswara', 3, 2),
(37, 19, 15, 'I Gusti Ngurah Rama Iswara', 'dreamlight098@gmail.com', 4, 'Tidur', 4, 1),
(38, 20, 15, 'I Gusti Ngurah Rama Iswara', 'dreamlight098@gmail.com', 4, 'I Gusti Ngurah Rama Iswara', 4, 2),
(39, 19, 15, 'I Gusti Ngurah Rama Iswara', 'larasnr@gmail.com', 4, 'Tidur', 5, 1),
(40, 20, 15, 'I Gusti Ngurah Rama Iswara', 'larasnr@gmail.com', 4, 'I Gusti Ngurah Rama Iswara', 5, 2),
(41, 17, 14, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 10, 'Rama', 2, 1),
(42, 18, 14, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 25, 'Rama Iswara', 2, 2),
(43, 17, 14, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 10, 'Rama', 3, 1),
(44, 18, 14, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 25, 'Rama Iswara', 3, 2),
(45, 21, 16, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 4, 'Rama', 1, 1),
(46, 22, 16, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 3, 'Buruk', 1, 2),
(47, 23, 16, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 2, 'lumayan', 1, 3),
(48, 21, 16, 'I Gusti Ngurah Rama Iswara', 'dreamlight098@gmail.com', 4, 'Rama', 2, 1),
(49, 22, 16, 'I Gusti Ngurah Rama Iswara', 'dreamlight098@gmail.com', 3, 'Buruk', 2, 2),
(50, 23, 16, 'I Gusti Ngurah Rama Iswara', 'dreamlight098@gmail.com', 2, 'lumayan', 2, 3),
(51, 21, 16, 'I Gusti Ngurah Rama Iswara', 'dreamer123@gmail.com', 3, 'Rama Iswara', 3, 1),
(52, 22, 16, 'I Gusti Ngurah Rama Iswara', 'dreamer123@gmail.com', 2, 'Makan', 3, 2),
(53, 23, 16, 'I Gusti Ngurah Rama Iswara', 'dreamer123@gmail.com', 4, 'Bagus', 3, 3),
(54, 21, 16, 'I Gusti Ngurah Rama Iswara', 'ramaiswara19980810@gmail.com', 4, 'Rama', 4, 1),
(55, 22, 16, 'I Gusti Ngurah Rama Iswara', 'ramaiswara19980810@gmail.com', 4, 'Baik', 4, 2),
(56, 23, 16, 'I Gusti Ngurah Rama Iswara', 'ramaiswara19980810@gmail.com', 4, 'Bagus', 4, 3),
(57, 25, 18, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 4, 'I Gusti Ngurah Rama Iswara', 1, 1),
(58, 26, 18, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 4, 'Tidur', 1, 2),
(59, 25, 18, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 4, 'I Gusti Ngurah Rama Iswara', 2, 1),
(60, 26, 18, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 2, 'Buruk', 2, 2),
(61, 25, 18, 'I Gusti Ngurah Rama Iswara', 'larasnr@gmail.com', 4, 'I Gusti Ngurah Rama Iswara', 3, 1),
(62, 26, 18, 'I Gusti Ngurah Rama Iswara', 'larasnr@gmail.com', 1, 'Baik', 3, 2),
(63, 25, 18, 'I Gusti Ngurah Rama Iswara', 'dreamer123@gmail.com', 2, 'Rama Iswara', 4, 1),
(64, 26, 18, 'I Gusti Ngurah Rama Iswara', 'dreamer123@gmail.com', 2, 'Buruk', 4, 2),
(65, 25, 18, 'I Gusti Ngurah Rama Iswara', 'dreamlight098@gmail.com', 3, 'I Gusti Ngurah Rama ', 5, 1),
(66, 26, 18, 'I Gusti Ngurah Rama Iswara', 'dreamlight098@gmail.com', 3, 'Makan', 5, 2),
(67, 25, 18, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 4, 'I Gusti Ngurah Rama Iswara', 6, 1),
(68, 26, 18, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 4, 'Tidur', 6, 2),
(69, 25, 18, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 4, 'I Gusti Ngurah Rama Iswara', 7, 1),
(70, 26, 18, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 4, 'Tidur', 7, 2),
(71, 25, 18, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 1, 'Rama', 8, 1),
(72, 26, 18, 'I Gusti Ngurah Rama Iswara', 'ramaiswara10081998@gmail.com', 3, 'Makan', 8, 2);
=======
(22, 9, 4, 'Dadang Sudadang', 'dadang@dadang.com', 1, 'sangat tidak setuju', 1, 3);
>>>>>>> 95c4b21a0d4f9cd9e84b2add1b3078ceedb8039e

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `nama`, `password`, `createdAt`) VALUES
(1, 'idhin@gmail.com', 'khulafaur', '123', '2020-07-07 12:41:20'),
(2, 'asep@asep.com', 'asep', 'asep', '2020-07-13 17:09:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kuisioner`
--
ALTER TABLE `kuisioner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pearson`
--
ALTER TABLE `pearson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responden`
--
ALTER TABLE `responden`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kuisioner`
--
ALTER TABLE `kuisioner`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

>>>>>>> 95c4b21a0d4f9cd9e84b2add1b3078ceedb8039e
--
-- AUTO_INCREMENT for table `pearson`
--
ALTER TABLE `pearson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

>>>>>>> 95c4b21a0d4f9cd9e84b2add1b3078ceedb8039e
--
-- AUTO_INCREMENT for table `responden`
--
ALTER TABLE `responden`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

>>>>>>> 95c4b21a0d4f9cd9e84b2add1b3078ceedb8039e
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
