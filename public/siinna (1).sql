-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 05:39 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siinna`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrean`
--

CREATE TABLE `antrean` (
  `id` int(11) NOT NULL,
  `jenis_pelayanan` varchar(255) DEFAULT NULL,
  `kode_antrean` varchar(255) DEFAULT NULL,
  `nomor_antrean` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antrean`
--

INSERT INTO `antrean` (`id`, `jenis_pelayanan`, `kode_antrean`, `nomor_antrean`, `status`, `created_at`, `updated_at`) VALUES
(214, 'teller', 'A', 1, 'selesai', '2022-04-24 03:37:39', '2022-04-24 03:38:21'),
(215, 'teller', 'A', 2, 'selesai', '2022-04-24 03:37:54', '2022-04-24 03:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level1` varchar(255) DEFAULT NULL,
  `no_pelayanan` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `level1`, `no_pelayanan`, `status`, `created_at`, `updated_at`) VALUES
(3, 'teller1.1', 'teller1.1@siinna.id', '$2y$10$CQpKgUkQ5fE8ZYf1E0EYY.aACvPnaCUkxiDTfPfIhQMn.IobAcq/G', 'teller', 1, 1, '2022-02-09 07:36:22', '2022-04-24 03:08:06'),
(4, 'cs1.1', 'cs1.1@siinna.id', '$2y$10$CQpKgUkQ5fE8ZYf1E0EYY.aACvPnaCUkxiDTfPfIhQMn.IobAcq/G', 'cs', 1, 1, '2022-02-09 07:36:22', '2022-04-24 03:08:04'),
(12, 'admin1.1', 'admin1.1@siinna.id', '$2y$10$CQpKgUkQ5fE8ZYf1E0EYY.aACvPnaCUkxiDTfPfIhQMn.IobAcq/G', 'admin', NULL, 1, '2022-02-09 21:03:54', '2022-04-24 03:08:12'),
(15, 'teller1.2', 'teller1.2@siinna.id', '$2y$10$CQpKgUkQ5fE8ZYf1E0EYY.aACvPnaCUkxiDTfPfIhQMn.IobAcq/G', 'teller', 2, 1, '2022-02-17 00:53:16', '2022-04-24 03:08:15'),
(16, 'teller1.3', 'teller1.3@siinna.id', '$2y$10$CQpKgUkQ5fE8ZYf1E0EYY.aACvPnaCUkxiDTfPfIhQMn.IobAcq/G', 'teller', 3, 1, '2022-02-17 00:53:43', '2022-04-24 03:08:17'),
(19, 'cs1.2', 'cs1.2@siinna.id', '$2y$10$qlBgHLG0Pz8TucUCYhDNOe150qs37yySVBluGpYXJHOX5n32NrpMe', 'cs', 2, 1, '2022-04-23 20:29:38', '2022-04-23 20:29:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrean`
--
ALTER TABLE `antrean`
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
-- AUTO_INCREMENT for table `antrean`
--
ALTER TABLE `antrean`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
