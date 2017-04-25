-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 25 Apr 2017 pada 14.36
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
(1, 2, 'Rizki Herdatullah', 'Sumenep', '2017-04-25 14:24:00', '0', 'Probolinggo', '082234367866', '-', '-', 'AIESEC', 'Mascitra.com', 'Programming', 'Sumenep', '20170425140942.jpg', 'rizkiherda@gmail.com', 5, 'Ok', 'Good', '0', NULL, NULL, 3, NULL, NULL),
(2, 1, 'Ardyan', 'Jember', '2017-04-25 14:26:49', '0', 'Jember', '089893824', '', '', '', '', '', 'Jakarta', '', 'ardyan@gmail.com', 6, 'Good', 'Siap', '0', NULL, NULL, 3, NULL, NULL),
(3, 2, 'Redi', 'Probolinggo', '2017-04-25 14:27:32', '0', 'Jember', '08333234324', '', '', '', '', '', 'Surabaya', '', 'redi@gmail.com', 5, 'Sip', 'Ok', '0', NULL, NULL, 3, NULL, NULL),
(4, 1, 'Akbar', 'Pamekasan', '2017-04-25 14:27:54', '0', 'Pamekasan', '08222222222', '', '', '', '', '', '', '', 'akbar@gmail.com', 7, 'Ok', 'Sip', '0', NULL, NULL, 3, NULL, NULL),
(5, 2, 'Farida', 'Sumenep', '2017-04-25 14:27:19', '1', 'Probolinggo', '089898989898', '', '', '', '', '', 'Probolinggo', '', 'farida@farida.com', 5, 'Luar BIasa', 'Mantab', '0', NULL, NULL, 3, NULL, NULL),
(6, 1, 'Ayu', 'Jakarta', '2017-04-25 13:49:43', '1', 'Jakarta', '089898374313', '', '', '', '', '', NULL, '', 'ayu@ayu.com', 6, NULL, '', '1', NULL, NULL, -1, NULL, NULL),
(7, 1, 'Ayunda', 'Patrang', '2017-04-25 13:49:40', '1', 'Jember', '08333333333', '-', '-', '-', '-', '-', NULL, '', 'ayunda@ayunda.com', 6, NULL, 'Ok', '1', NULL, NULL, -1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
