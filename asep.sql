-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 26, 2020 at 04:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(4, 2, 'telkom university', 'telkom university adalah suatu universitas');

-- --------------------------------------------------------

--
-- Table structure for table `pearson`
--

CREATE TABLE `pearson` (
  `id` int(11) NOT NULL,
  `idKuisioner` int(11) NOT NULL,
  `rtable` float NOT NULL,
  `thitung` float NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(9, 4, 'apakah kamu setuju jika telkom memberikan diskon ktm ?', 'sangat setuju', 'setuju', 'tidak setuju ', 'sangat tidak setuju', 4, 3, 2, 1);

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
(22, 9, 4, 'Dadang Sudadang', 'dadang@dadang.com', 1, 'sangat tidak setuju', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pearson`
--
ALTER TABLE `pearson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `responden`
--
ALTER TABLE `responden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
