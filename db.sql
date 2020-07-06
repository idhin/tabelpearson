-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 06, 2020 at 07:10 PM
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
-- Database: `pa_asep`
--

-- --------------------------------------------------------

--
-- Table structure for table `kuisioner`
--

CREATE TABLE `kuisioner` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `kodeKuisioner` varchar(50) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `jawabanA` varchar(100) NOT NULL,
  `jawabanB` varchar(100) NOT NULL,
  `jawabanC` varchar(100) NOT NULL,
  `jawabanD` varchar(100) NOT NULL,
  `bobotA` int(11) NOT NULL,
  `bobotB` int(11) NOT NULL,
  `bobotC` int(11) NOT NULL,
  `bobotD` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuisioner`
--

INSERT INTO `kuisioner` (`id`, `idUser`, `judul`, `deskripsi`, `kodeKuisioner`, `pertanyaan`, `jawabanA`, `jawabanB`, `jawabanC`, `jawabanD`, `bobotA`, `bobotB`, `bobotC`, `bobotD`, `createdAt`) VALUES
(63, 6, 'Nanya Presiden', 'Soal2 Presiden', '123', 'Presiden Kita Sekarang', 'Jokowi', 'Jakaw', 'Jekas', 'Jakas', 4, 3, 2, 1, '2020-07-06 16:08:00'),
(64, 6, 'Nanya Presiden', 'Soal2 Presiden', '123', 'Presiden Pesawat', 'Hasb', 'Habas', 'Habibie', 'Habsk', 1, 2, 3, 4, '2020-07-06 16:08:21'),
(65, 6, 'Nanya Presiden', 'Soal2 Presiden', '123', 'Presiden Cewe', 'Megawati', 'Meagas', 'Megawadx', 'Mbamega', 4, 2, 3, 1, '2020-07-06 16:08:47'),
(68, 6, 'Kewarganegaraan', 'Nanya Kewarganegaraan', '871', 'pertanyaan satu isinya apa', 'jawaban', 'Jawaban 2', 'Jawban 5', 'Jawa', 4, 3, 4, 1, '2020-07-06 16:37:33'),
(69, 6, 'Kewarganegaraan', 'Nanya Kewarganegaraan', '871', 'Kenapako', 'iyah dende', 'tawwanan', 'Hawasa', 'Jasnba3', 1, 2, 3, 4, '2020-07-06 16:37:57'),
(70, 6, 'Kewarganegaraan', 'Nanya Kewarganegaraan', '871', 'Mohasna', '12', 'kansa', 'jnjj', 'okasa', 1, 2, 3, 4, '2020-07-06 16:38:11');

-- --------------------------------------------------------

--
-- Table structure for table `pearson`
--

CREATE TABLE `pearson` (
  `id` int(11) NOT NULL,
  `kodeKuisioner` varchar(11) NOT NULL,
  `rhitung` float NOT NULL,
  `rtable` float NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pearson`
--

INSERT INTO `pearson` (`id`, `kodeKuisioner`, `rhitung`, `rtable`, `status`) VALUES
(25, '123', 0.00184864, 0.811, 'tidak valid'),
(26, '134', 0, 0.997, 'tidak valid'),
(27, '871', -0.000864129, 0.95, 'tidak valid');

-- --------------------------------------------------------

--
-- Table structure for table `respon`
--

CREATE TABLE `respon` (
  `id` int(11) NOT NULL,
  `idPertanyaan` int(11) NOT NULL,
  `pertanyaan` varchar(50) NOT NULL,
  `pilihan` varchar(50) NOT NULL,
  `namaLengkap` varchar(50) NOT NULL,
  `orangKe` int(11) NOT NULL,
  `soalKe` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kodeKuisioner` varchar(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `respon`
--

INSERT INTO `respon` (`id`, `idPertanyaan`, `pertanyaan`, `pilihan`, `namaLengkap`, `orangKe`, `soalKe`, `email`, `kodeKuisioner`, `createdAt`) VALUES
(198, 63, 'Presiden Kita Sekarang', '4', 'Khulafaur Rasyidin', 1, 1, 'idhinofficial@gmail.com', '123', '2020-07-06 16:09:09'),
(199, 64, 'Presiden Pesawat', '3', 'Khulafaur Rasyidin', 1, 2, 'idhinofficial@gmail.com', '123', '2020-07-06 16:09:09'),
(200, 65, 'Presiden Cewe', '4', 'Khulafaur Rasyidin', 1, 3, 'idhinofficial@gmail.com', '123', '2020-07-06 16:09:09'),
(201, 63, 'Presiden Kita Sekarang', '4', 'Asep Sutrisna', 2, 1, 'aserp@asmas.com', '123', '2020-07-06 16:09:21'),
(202, 64, 'Presiden Pesawat', '3', 'Asep Sutrisna', 2, 2, 'aserp@asmas.com', '123', '2020-07-06 16:09:21'),
(203, 65, 'Presiden Cewe', '4', 'Asep Sutrisna', 2, 3, 'aserp@asmas.com', '123', '2020-07-06 16:09:21'),
(204, 63, 'Presiden Kita Sekarang', '4', 'idinaja', 3, 1, 'idin@gmail.com', '123', '2020-07-06 16:09:35'),
(205, 64, 'Presiden Pesawat', '1', 'idinaja', 3, 2, 'idin@gmail.com', '123', '2020-07-06 16:09:35'),
(206, 65, 'Presiden Cewe', '1', 'idinaja', 3, 3, 'idin@gmail.com', '123', '2020-07-06 16:09:35'),
(207, 63, 'Presiden Kita Sekarang', '2', 'Tabe Kodong', 4, 1, 'tabe@gmail.com', '123', '2020-07-06 16:09:47'),
(208, 64, 'Presiden Pesawat', '2', 'Tabe Kodong', 4, 2, 'tabe@gmail.com', '123', '2020-07-06 16:09:47'),
(209, 65, 'Presiden Cewe', '1', 'Tabe Kodong', 4, 3, 'tabe@gmail.com', '123', '2020-07-06 16:09:47'),
(210, 66, 'Ideologi Negara Kita', '4', 'Khulafaur Rasyidin', 1, 1, 'isi@gmail.com', '134', '2020-07-06 16:23:08'),
(211, 67, 'Hari kemerdakaan', '4', 'Khulafaur Rasyidin', 1, 2, 'isi@gmail.com', '134', '2020-07-06 16:23:08'),
(212, 66, 'Ideologi Negara Kita', '4', 'idin aja', 2, 1, 'iasi@gmail.com', '134', '2020-07-06 16:24:40'),
(213, 67, 'Hari kemerdakaan', '4', 'idin aja', 2, 2, 'iasi@gmail.com', '134', '2020-07-06 16:24:40'),
(214, 66, 'Ideologi Negara Kita', '4', 'jaawab', 3, 1, 'jawab@gmail.com', '134', '2020-07-06 16:25:40'),
(215, 67, 'Hari kemerdakaan', '4', 'jaawab', 3, 2, 'jawab@gmail.com', '134', '2020-07-06 16:25:40'),
(216, 68, 'pertanyaan satu isinya apa', '3', 'haha', 1, 1, 'haha@gmail.com', '871', '2020-07-06 16:42:51'),
(217, 69, 'Kenapako', '2', 'haha', 1, 2, 'haha@gmail.com', '871', '2020-07-06 16:42:51'),
(218, 68, 'pertanyaan satu isinya apa', '1', 'saks', 2, 1, 'kjnsdsnd@jhsdsd.com', '871', '2020-07-06 16:42:59'),
(219, 69, 'Kenapako', '4', 'saks', 2, 2, 'kjnsdsnd@jhsdsd.com', '871', '2020-07-06 16:42:59'),
(220, 68, 'pertanyaan satu isinya apa', '4', 'buset', 3, 1, 'asjas@asas.com', '871', '2020-07-06 16:43:11'),
(221, 69, 'Kenapako', '2', 'buset', 3, 2, 'asjas@asas.com', '871', '2020-07-06 16:43:11'),
(222, 68, 'pertanyaan satu isinya apa', '4', 'Asep Sutrisna', 4, 1, 'asep@asep.com', '871', '2020-07-06 16:45:20'),
(223, 69, 'Kenapako', '1', 'Asep Sutrisna', 4, 2, 'asep@asep.com', '871', '2020-07-06 16:45:20'),
(224, 63, 'Presiden Kita Sekarang', '4', 'anak baru', 5, 1, 'abajbaru@gmail.com', '123', '2020-07-06 16:45:49'),
(225, 64, 'Presiden Pesawat', '3', 'anak baru', 5, 2, 'abajbaru@gmail.com', '123', '2020-07-06 16:45:49'),
(226, 63, 'Presiden Kita Sekarang', '4', 'tambahg lagi', 6, 1, 'dicoba@gmail.com', '123', '2020-07-06 16:47:05'),
(227, 64, 'Presiden Pesawat', '3', 'tambahg lagi', 6, 2, 'dicoba@gmail.com', '123', '2020-07-06 16:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(300) NOT NULL,
  `username` varchar(100) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `username`, `createdAt`) VALUES
(6, 'asep', 'asep@asep.com', 'asep', '', '2020-07-06 15:59:42');

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
-- Indexes for table `respon`
--
ALTER TABLE `respon`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `pearson`
--
ALTER TABLE `pearson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `respon`
--
ALTER TABLE `respon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
