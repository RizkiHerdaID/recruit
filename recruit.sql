-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 19 Apr 2017 pada 04.04
-- Versi Server: 10.2.3-MariaDB-log
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recruit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calculation`
--

CREATE TABLE `calculation` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `criteria_id` double NOT NULL,
  `score` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `position_id` tinyint(4) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `born_in` varchar(255) NOT NULL,
  `born_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `gender` enum('0','1') NOT NULL COMMENT '0 - Laki-laki\n1 - Perempuan',
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `formal_education` text DEFAULT NULL,
  `unformal_education` text DEFAULT NULL,
  `organization_experience` text DEFAULT NULL,
  `work_experience` text DEFAULT NULL,
  `skills` text DEFAULT NULL,
  ` placement_plan` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `last_education` tinyint(4) DEFAULT NULL,
  `examiner_comment` text DEFAULT NULL,
  `interviewer_comment` text DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT NULL,
  `interviewed_at` timestamp NULL DEFAULT NULL,
  `examined_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `candidate`
--

INSERT INTO `candidate` (`id`, `position_id`, `name`, `born_in`, `born_at`, `gender`, `address`, `phone`, `formal_education`, `unformal_education`, `organization_experience`, `work_experience`, `skills`, ` placement_plan`, `photo`, `email`, `last_education`, `examiner_comment`, `interviewer_comment`, `deleted`, `interviewed_at`, `examined_at`, `status`) VALUES
(1, NULL, 'Rizki Herdatullah', 'Sumenep', '0000-00-00 00:00:00', '0', 'Probolinggo', '082234367866', '-', '-', 'AIESEC\r\nHIMASIF', 'Mascitra.com', 'Programming', NULL, '', 'rizkiherda@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 2),
(2, NULL, 'Ardyan', 'Jember', '0000-00-00 00:00:00', '0', 'Jember', '089893824', '', '', '', '', '', NULL, '', 'ardyan@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, NULL, 'Redi', 'Probolinggo', '2017-04-18 13:30:45', '0', 'Jember', '08333234324', '', '', '', '', '', NULL, '', 'redi@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `criteria`
--

CREATE TABLE `criteria` (
  `id` int(11) NOT NULL,
  `criteria_id` varchar(6) DEFAULT NULL,
  `position_id` int(11) NOT NULL,
  `weight` tinyint(2) NOT NULL,
  `weight_value` double NOT NULL,
  `stage` enum('0','1') NOT NULL COMMENT '1 - Wawancara\n2 - Uji Kemampuan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `criteria`
--

INSERT INTO `criteria` (`id`, `criteria_id`, `position_id`, `weight`, `weight_value`, `stage`) VALUES
(1, 'CRI001', 1, 4, 0.090909090909091, '0'),
(2, 'CRI002', 1, 4, 0.090909090909091, '0'),
(3, 'CRI003', 1, 2, 0.045454545454545, '0'),
(4, 'CRI004', 1, 3, 0.068181818181818, '0'),
(5, 'CRI005', 1, 3, 0.068181818181818, '0'),
(6, 'CRI006', 1, 5, 0.11363636363636, '0'),
(7, 'CRI007', 1, 5, 0.11363636363636, '0'),
(8, 'CRI008', 1, 4, 0.090909090909091, '0'),
(9, 'CRI009', 1, 3, 0.068181818181818, '1'),
(10, 'CRI010', 1, 3, 0.068181818181818, '1'),
(11, 'CRI011', 1, 3, 0.068181818181818, '1'),
(12, 'CRI012', 1, 2, 0.045454545454545, '1'),
(13, 'CRI013', 1, 3, 0.068181818181818, '1'),
(14, 'CRI001', 2, 3, 0.055555555555556, '0'),
(15, 'CRI002', 2, 5, 0.092592592592593, '0'),
(16, 'CRI003', 2, 4, 0.074074074074074, '0'),
(17, 'CRI004', 2, 5, 0.092592592592593, '0'),
(18, 'CRI005', 2, 4, 0.074074074074074, '0'),
(19, 'CRI006', 2, 5, 0.092592592592593, '0'),
(20, 'CRI007', 2, 5, 0.092592592592593, '0'),
(21, 'CRI008', 2, 5, 0.092592592592593, '0'),
(22, 'CRI009', 2, 4, 0.074074074074074, '0'),
(23, 'CRI010', 2, 5, 0.092592592592593, '0'),
(24, 'CRI011', 2, 2, 0.037037037037037, '0'),
(25, 'CRI012', 2, 4, 0.074074074074074, '0'),
(26, 'CRI013', 2, 3, 0.055555555555556, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `deleted` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `position`
--

INSERT INTO `position` (`id`, `name`, `deleted`) VALUES
(1, 'Manajer', '0'),
(2, 'Spesialis', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` tinyint(4) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calculation`
--
ALTER TABLE `calculation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criteria`
--
ALTER TABLE `criteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calculation`
--
ALTER TABLE `calculation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `criteria`
--
ALTER TABLE `criteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
