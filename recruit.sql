-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 25 Apr 2017 pada 01.49
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
  `criteria_id` varchar(6) NOT NULL,
  `score` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calculation`
--

INSERT INTO `calculation` (`id`, `candidate_id`, `criteria_id`, `score`) VALUES
(1, 2, 'CRI001', 4),
(2, 2, 'CRI002', 3),
(3, 2, 'CRI003', 5),
(4, 2, 'CRI004', 4),
(5, 2, 'CRI005', 5),
(6, 2, 'CRI006', 4),
(7, 2, 'CRI007', 4),
(20, 2, 'CRI008', 5),
(21, 2, 'CRI009', 3),
(22, 2, 'CRI010', 3),
(23, 2, 'CRI011', 4),
(24, 2, 'CRI012', 4),
(25, 2, 'CRI013', 5),
(26, 1, 'CRI001', 5),
(27, 1, 'CRI002', 3),
(28, 1, 'CRI003', 3),
(29, 1, 'CRI004', 4),
(30, 1, 'CRI005', 4),
(31, 1, 'CRI006', 3),
(32, 1, 'CRI007', 3),
(33, 1, 'CRI008', 5),
(34, 1, 'CRI009', 3),
(35, 1, 'CRI010', 4),
(36, 1, 'CRI011', 3),
(37, 1, 'CRI012', 2),
(38, 1, 'CRI013', 2),
(39, 3, 'CRI001', 5),
(40, 3, 'CRI002', 4),
(41, 3, 'CRI003', 3),
(42, 3, 'CRI004', 2),
(43, 3, 'CRI005', 3),
(44, 3, 'CRI006', 2),
(45, 3, 'CRI007', 3),
(46, 3, 'CRI008', 3),
(47, 3, 'CRI009', 3),
(48, 3, 'CRI010', 2),
(49, 3, 'CRI011', 4),
(50, 3, 'CRI012', 3),
(51, 3, 'CRI013', 3),
(52, 4, 'CRI001', 5),
(53, 4, 'CRI002', 5),
(54, 4, 'CRI003', 3),
(55, 4, 'CRI004', 3),
(56, 4, 'CRI005', 3),
(57, 4, 'CRI006', 4),
(58, 4, 'CRI007', 3),
(59, 4, 'CRI008', 4),
(60, 4, 'CRI009', 4),
(61, 4, 'CRI010', 5),
(62, 4, 'CRI011', 4),
(63, 4, 'CRI012', 5),
(64, 4, 'CRI013', 4),
(65, 5, 'CRI001', 4),
(66, 5, 'CRI002', 5),
(67, 5, 'CRI003', 5),
(68, 5, 'CRI004', 4),
(69, 5, 'CRI005', 5),
(70, 5, 'CRI006', 5),
(71, 5, 'CRI007', 4),
(72, 5, 'CRI008', 4),
(73, 5, 'CRI009', 5),
(74, 5, 'CRI010', 5),
(75, 5, 'CRI011', 4),
(76, 5, 'CRI012', 4),
(77, 5, 'CRI013', 5);

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
  `placement_plan` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `last_education` tinyint(4) DEFAULT NULL,
  `examiner_comment` text DEFAULT NULL,
  `interviewer_comment` text DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  `interviewed_at` timestamp NULL DEFAULT NULL,
  `examined_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `position_score` double DEFAULT NULL,
  `position_percentage` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `candidate`
--

INSERT INTO `candidate` (`id`, `position_id`, `name`, `born_in`, `born_at`, `gender`, `address`, `phone`, `formal_education`, `unformal_education`, `organization_experience`, `work_experience`, `skills`, `placement_plan`, `photo`, `email`, `last_education`, `examiner_comment`, `interviewer_comment`, `deleted`, `interviewed_at`, `examined_at`, `status`, `position_score`, `position_percentage`) VALUES
(1, 2, 'Rizki Herdatullah', 'Sumenep', '2017-04-20 00:02:04', '0', 'Probolinggo', '082234367866', '-', '-', 'AIESEC', 'Mascitra.com', 'Programming', 'Sumenep', '', 'rizkiherda@gmail.com', 5, 'Ok', 'Good', '0', NULL, NULL, 2, NULL, NULL),
(2, 1, 'Ardyan', 'Jember', '2017-04-20 00:02:04', '0', 'Jember', '089893824', '', '', '', '', '', 'Jakarta', '', 'ardyan@gmail.com', 6, 'Good', 'Siap', '0', NULL, NULL, 2, NULL, NULL),
(3, 2, 'Redi', 'Probolinggo', '2017-04-20 00:02:04', '0', 'Jember', '08333234324', '', '', '', '', '', 'Surabaya', '', 'redi@gmail.com', 5, 'Sip', 'Ok', '0', NULL, NULL, 2, NULL, NULL),
(4, 1, 'Akbar', 'Pamekasan', '2017-04-25 01:21:15', '0', 'Pamekasan', '08222222222', '', '', '', '', '', '', '', 'akbar@gmail.com', 7, 'Ok', 'Sip', '0', NULL, NULL, 2, NULL, NULL),
(5, 2, 'Farida', 'Sumenep', '2017-04-25 01:35:50', '1', 'Probolinggo', '089898989898', '', '', '', '', '', 'Probolinggo', '', 'farida@farida.com', 5, 'Luar BIasa', 'Mantab', '0', NULL, NULL, 2, NULL, NULL);

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
(1, 'CRI001', 1, 5, 0.1063829787234, '0'),
(2, 'CRI002', 1, 4, 0.085106382978723, '0'),
(3, 'CRI003', 1, 2, 0.042553191489362, '0'),
(4, 'CRI004', 1, 3, 0.063829787234043, '0'),
(5, 'CRI005', 1, 3, 0.063829787234043, '0'),
(6, 'CRI006', 1, 5, 0.1063829787234, '0'),
(7, 'CRI007', 1, 5, 0.1063829787234, '0'),
(8, 'CRI008', 1, 4, 0.085106382978723, '0'),
(9, 'CRI009', 1, 3, 0.063829787234043, '1'),
(10, 'CRI010', 1, 3, 0.063829787234043, '1'),
(11, 'CRI011', 1, 3, 0.063829787234043, '1'),
(12, 'CRI012', 1, 4, 0.085106382978723, '1'),
(13, 'CRI013', 1, 3, 0.063829787234043, '1'),
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
(26, 'CRI013', 2, 3, 0.055555555555556, '0'),
(27, 'CRI001', 4, 4, 0.083333333333333, '0'),
(28, 'CRI002', 4, 4, 0.083333333333333, '0'),
(29, 'CRI003', 4, 4, 0.083333333333333, '0'),
(30, 'CRI004', 4, 3, 0.0625, '0'),
(31, 'CRI005', 4, 3, 0.0625, '0'),
(32, 'CRI006', 4, 4, 0.083333333333333, '0'),
(33, 'CRI007', 4, 4, 0.083333333333333, '0'),
(34, 'CRI008', 4, 4, 0.083333333333333, '0'),
(35, 'CRI009', 4, 3, 0.0625, '0'),
(36, 'CRI010', 4, 4, 0.083333333333333, '0'),
(37, 'CRI011', 4, 5, 0.10416666666667, '0'),
(38, 'CRI012', 4, 2, 0.041666666666667, '0'),
(39, 'CRI013', 4, 4, 0.083333333333333, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `born_in` varchar(255) DEFAULT NULL,
  `born_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `gender` enum('0','1') DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `date_started_work` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `salary` int(11) DEFAULT NULL,
  `deleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `employee`
--

INSERT INTO `employee` (`id`, `position_id`, `name`, `born_in`, `born_at`, `gender`, `address`, `phone`, `email`, `date_started_work`, `salary`, `deleted`) VALUES
(3, 2, 'Destian Yoga Pradipta', 'Bondowoso', '2017-04-21 18:30:30', '0', 'Bondowoso', '0822233332222', 'destian@destian.com', '2017-04-04 17:00:00', 40000, '0'),
(4, 2, 'Farida', 'Sumenep', '0000-00-00 00:00:00', '1', 'Probolinggo', '08989898989', 'farida@farida.com', '2017-04-18 17:00:00', 5000, '0');

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
(2, 'Spesialis', '0'),
(3, 'Sekertaris', '1');

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
-- Indexes for table `employee`
--
ALTER TABLE `employee`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `criteria`
--
ALTER TABLE `criteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
