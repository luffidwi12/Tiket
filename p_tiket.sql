-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2021 at 02:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p_tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`) VALUES
(1, 'Cirebon'),
(2, 'Bandung'),
(3, 'Jakarta'),
(4, 'Surabaya'),
(5, 'Yogyakarya'),
(6, 'Semarang'),
(7, 'Tangerang'),
(8, 'Tangerang Selatan'),
(9, 'Bogor'),
(10, 'Karawang'),
(11, 'Majalengka'),
(12, 'Kuningan'),
(13, 'Subang'),
(14, 'Indramayu');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `asal` varchar(150) NOT NULL,
  `tujuan` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `jadwal` date NOT NULL,
  `harga` varchar(150) NOT NULL,
  `seat` varchar(100) NOT NULL,
  `j_keberangkatan` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `asal`, `tujuan`, `tanggal`, `jadwal`, `harga`, `seat`, `j_keberangkatan`) VALUES
(2, 'Bandung', 'Jakarta', '2021-11-29', '2021-12-02', '50000', '3', '08:17:00'),
(3, 'Yogyakarya', 'Semarang', '2021-11-30', '2021-12-07', '85000', '1', '08:45:00'),
(5, 'Bogor', 'Karawang', '2021-11-30', '2021-12-08', '50000', '1', '12:30:00'),
(6, 'Majalengka', 'Subang', '2021-11-30', '2021-12-07', '45000', '5', '13:00:00'),
(7, 'Indramayu', 'Subang', '2021-11-30', '2021-12-07', '500000', '20', '16:25:00'),
(8, 'Jakarta', 'Cirebon', '2021-11-30', '2021-12-04', '130000', '8', '07:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'admin', '$2y$10$bZXMS6AMl0t0OALyvTHSC.AKSQG8Le0ybLtqAM66V4bppW8SIjGti'),
(3, 'luffi', '$2y$10$vpMzR6lRh9w22dKiZ1XGMevZ56eXKBGxK48hogPqlU6vUJayMsgAi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
