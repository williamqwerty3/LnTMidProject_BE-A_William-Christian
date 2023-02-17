-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 17, 2023 at 03:40 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BNCC_LNT`
--

-- --------------------------------------------------------

--
-- Table structure for table `Karyawan`
--

CREATE TABLE `Karyawan` (
  `id` int(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Umur` int(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Telepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Karyawan`
--

INSERT INTO `Karyawan` (`id`, `Nama`, `Umur`, `Alamat`, `Telepon`) VALUES
(13, 'William Christian', 22, 'Jalan Dharma Permata 1', '081808452411'),
(16, 'Christine Sismanto', 50, 'Jalan Dharma Permata 1', '081808635533'),
(17, 'Richard Homan', 24, 'Jalan Dharma Permata 1', '0818181818'),
(18, 'I dont Know', 26, 'San Francisco', '081818811');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Karyawan`
--
ALTER TABLE `Karyawan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Karyawan`
--
ALTER TABLE `Karyawan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
