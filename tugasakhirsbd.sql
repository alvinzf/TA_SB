-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 05:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasakhirsbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_username`, `admin_password`) VALUES
('admin', 'admin'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id_negara` int(20) NOT NULL,
  `id_hotel` int(20) NOT NULL,
  `nama_hotel` varchar(50) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id_negara`, `id_hotel`, `nama_hotel`, `check_in`, `check_out`) VALUES
(1, 1, 'One Heart Kyoto', '2021-11-01', '2021-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` int(20) NOT NULL,
  `id_negara` int(20) NOT NULL,
  `nama_kendaraan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `id_negara`, `nama_kendaraan`) VALUES
(1, 1, 'Becak Terbang'),
(1, 1, 'Becak Terbang'),
(2, 2, 'Jetpack JoyRide');

-- --------------------------------------------------------

--
-- Table structure for table `negara`
--

CREATE TABLE `negara` (
  `is_deleted` int(1) NOT NULL DEFAULT 0,
  `id_user` int(20) NOT NULL,
  `id_negara` int(20) NOT NULL,
  `id_kendaraan` int(20) NOT NULL,
  `id_hotel` int(20) NOT NULL,
  `negara` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `negara`
--

INSERT INTO `negara` (`is_deleted`, `id_user`, `id_negara`, `id_kendaraan`, `id_hotel`, `negara`) VALUES
(0, 1, 1, 1, 1, 'Singapore');

-- --------------------------------------------------------

--
-- Stand-in structure for view `travelog`
-- (See below for the actual view)
--
CREATE TABLE `travelog` (
`id_user` int(20)
,`username` varchar(50)
,`is_deleted` int(1)
,`negara` varchar(50)
,`id_negara` int(20)
,`nama_kendaraan` varchar(50)
,`nama_hotel` varchar(50)
,`check_in` date
,`check_out` date
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'East Border', '1234');

-- --------------------------------------------------------

--
-- Structure for view `travelog`
--
DROP TABLE IF EXISTS `travelog`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `travelog`  AS SELECT `a`.`id_user` AS `id_user`, `d`.`username` AS `username`, `a`.`is_deleted` AS `is_deleted`, `a`.`negara` AS `negara`, `a`.`id_negara` AS `id_negara`, `b`.`nama_kendaraan` AS `nama_kendaraan`, `c`.`nama_hotel` AS `nama_hotel`, `c`.`check_in` AS `check_in`, `c`.`check_out` AS `check_out` FROM (((`negara` `a` join `kendaraan` `b` on(`a`.`id_kendaraan` = `b`.`id_kendaraan`)) join `hotel` `c` on(`a`.`id_hotel` = `c`.`id_hotel`)) join `user` `d` on(`d`.`id_user` = `a`.`id_user`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_negara`,`id_hotel`);

--
-- Indexes for table `negara`
--
ALTER TABLE `negara`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `negara`
--
ALTER TABLE `negara`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
