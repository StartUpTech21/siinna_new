-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 05:30 AM
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
  `id_pelayanan` int(11) DEFAULT NULL,
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

INSERT INTO `antrean` (`id`, `id_pelayanan`, `jenis_pelayanan`, `kode_antrean`, `nomor_antrean`, `status`, `created_at`, `updated_at`) VALUES
(187, 3, 'teller', 'A', 1, 'selesai', '2022-04-23 15:57:12', '2022-04-23 19:28:55'),
(188, 4, 'cs', 'B', 1, 'selesai', '2022-04-23 15:58:30', '2022-04-23 19:16:08'),
(189, 4, 'cs', 'B', 1, 'selesai', '2022-04-23 19:15:54', '2022-04-23 19:16:31'),
(190, 4, 'cs', 'B', 2, 'selesai', '2022-04-23 19:16:43', '2022-04-23 19:23:27'),
(191, 4, 'cs', 'B', 3, 'selesai', '2022-04-23 19:23:13', '2022-04-23 19:23:31'),
(192, 4, 'cs', 'B', 4, 'selesai', '2022-04-23 19:23:39', '2022-04-23 19:23:53'),
(193, 4, 'cs', 'B', 5, 'selesai', '2022-04-23 19:24:01', '2022-04-23 19:40:03'),
(194, 3, 'teller', 'A', 1, 'selesai', '2022-04-23 19:24:53', '2022-04-23 19:59:37'),
(195, 3, 'teller', 'A', 2, 'selesai', '2022-04-23 19:25:02', '2022-04-23 19:59:43'),
(196, 3, 'teller', 'A', 3, 'selesai', '2022-04-23 19:25:18', '2022-04-23 20:10:14'),
(197, 3, 'teller', 'A', 4, 'selesai', '2022-04-23 19:28:42', '2022-04-23 20:12:07'),
(198, 4, 'cs', 'B', 6, 'selesai', '2022-04-23 19:33:09', '2022-04-23 19:40:07'),
(199, 4, 'cs', 'B', 7, 'selesai', '2022-04-23 19:38:52', '2022-04-23 19:52:45'),
(200, 4, 'cs', 'B', 8, 'selesai', '2022-04-23 19:39:05', '2022-04-23 19:52:48'),
(201, 4, 'cs', 'B', 9, 'selesai', '2022-04-23 19:52:28', '2022-04-23 19:53:40'),
(202, 4, 'cs', 'B', 10, 'selesai', '2022-04-23 19:52:53', '2022-04-23 19:53:45'),
(203, 4, 'cs', 'B', 11, 'selesai', '2022-04-23 19:53:08', '2022-04-23 20:11:30'),
(204, 4, 'cs', 'B', 12, 'selesai', '2022-04-23 19:53:19', '2022-04-23 20:11:34'),
(205, 3, 'teller', 'A', 5, 'selesai', '2022-04-23 20:05:09', '2022-04-23 22:23:43'),
(206, NULL, 'cs', 'B', 13, 'menunggu', '2022-04-23 20:06:56', '2022-04-23 20:06:56'),
(207, NULL, 'cs', 'B', 14, 'menunggu', '2022-04-23 20:10:19', '2022-04-23 20:10:19'),
(208, NULL, 'cs', 'B', 15, 'menunggu', '2022-04-23 20:10:29', '2022-04-23 20:10:29'),
(209, NULL, 'cs', 'B', 16, 'menunggu', '2022-04-23 20:10:46', '2022-04-23 20:10:46'),
(210, NULL, 'cs', 'B', 17, 'menunggu', '2022-04-23 20:10:55', '2022-04-23 20:10:55'),
(211, NULL, 'cs', 'B', 18, 'menunggu', '2022-04-23 20:11:11', '2022-04-23 20:11:11'),
(212, NULL, 'teller', 'A', 6, 'menunggu', '2022-04-23 20:11:44', '2022-04-23 20:11:44'),
(213, NULL, 'teller', 'A', 7, 'menunggu', '2022-04-23 20:11:54', '2022-04-23 20:11:54');

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id` int(11) NOT NULL,
  `jenis_pelayanan` varchar(255) DEFAULT NULL,
  `no_pelayanan` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`id`, `jenis_pelayanan`, `no_pelayanan`, `created_at`, `updated_at`) VALUES
(10, 'teller', 1, '2022-02-10 02:11:38', '2022-02-10 02:11:38'),
(11, 'teller', 2, '2022-02-10 02:11:44', '2022-02-10 02:11:44'),
(12, 'teller', 3, '2022-02-10 02:11:50', '2022-02-10 02:11:50'),
(13, 'cs', 1, '2022-02-10 02:11:57', '2022-02-10 02:11:57'),
(14, 'cs', 2, '2022-02-10 02:12:04', '2022-02-10 02:12:04');

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
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
