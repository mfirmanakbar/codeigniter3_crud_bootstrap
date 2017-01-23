-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 23, 2017 at 09:01 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tem_all`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_tamu`
--

CREATE TABLE `tb_tamu` (
  `id` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `url` text NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tamu`
--

INSERT INTO `tb_tamu` (`id`, `time`, `nama`, `email`, `url`, `pesan`) VALUES
(1, '2017-01-17 14:37:00', 'firmanx', 'firman.programmer@gmail.com', 'google.com', 'Tes pesan buku tamu'),
(2, '2017-01-17 15:29:07', 'koko', 'k@k', 'gugyu', 'acasc'),
(3, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(5, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(6, '2017-01-17 14:37:00', 'firmanx', 'firman.programmer@gmail.com', 'google.com', 'Tes pesan buku tamu'),
(7, '2017-01-17 15:29:07', 'koko', 'k@k', 'gugyu', 'acasc'),
(8, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(9, '2017-01-17 15:29:28', 'caugiux', 'iug@kbx', 'tuygusx', 'skjbvsiobiox'),
(10, '2017-01-17 14:37:00', 'firmanx', 'firman.programmer@gmail.com', 'google.com', 'Tes pesan buku tamu'),
(11, '2017-01-17 15:29:07', 'koko', 'k@k', 'gugyu', 'acasc'),
(12, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(13, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(14, '2017-01-17 14:37:00', 'firmanx', 'firman.programmer@gmail.com', 'google.com', 'Tes pesan buku tamu'),
(15, '2017-01-17 15:29:07', 'koko', 'k@k', 'gugyu', 'acasc'),
(16, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(17, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(18, '2017-01-17 14:37:00', 'firmanx', 'firman.programmer@gmail.com', 'google.com', 'Tes pesan buku tamu'),
(19, '2017-01-17 15:29:07', 'koko', 'k@k', 'gugyu', 'acasc'),
(20, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(21, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(22, '2017-01-17 14:37:00', 'firmanx', 'firman.programmer@gmail.com', 'google.com', 'Tes pesan buku tamu'),
(23, '2017-01-17 15:29:07', 'koko', 'k@k', 'gugyu', 'acasc'),
(24, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(25, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(26, '2017-01-17 14:37:00', 'firmanx', 'firman.programmer@gmail.com', 'google.com', 'Tes pesan buku tamu'),
(27, '2017-01-17 15:29:07', 'koko', 'k@k', 'gugyu', 'acasc'),
(28, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(29, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(30, '2017-01-17 14:37:00', 'firmanx', 'firman.programmer@gmail.com', 'google.com', 'Tes pesan buku tamu'),
(31, '2017-01-17 15:29:07', 'koko', 'k@k', 'gugyu', 'acasc'),
(32, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(33, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(34, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(35, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(36, '2017-01-17 15:29:07', 'koko', 'k@k', 'gugyu', 'acasc'),
(37, '2017-01-17 14:37:00', 'firmanx', 'firman.programmer@gmail.com', 'google.com', 'Tes pesan buku tamu'),
(38, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(39, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(40, '2017-01-17 15:29:07', 'koko', 'k@k', 'gugyu', 'acasc'),
(41, '2017-01-17 14:37:00', 'firmanx', 'firman.programmer@gmail.com', 'google.com', 'Tes pesan buku tamu'),
(42, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(43, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(44, '2017-01-17 15:29:07', 'koko', 'k@k', 'gugyu', 'acasc'),
(45, '2017-01-17 14:37:00', 'firmanx', 'firman.programmer@gmail.com', 'google.com', 'Tes pesan buku tamu'),
(46, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(47, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(48, '2017-01-17 15:29:07', 'koko', 'k@k', 'gugyu', 'acasc'),
(49, '2017-01-17 14:37:00', 'firmanx', 'firman.programmer@gmail.com', 'google.com', 'Tes pesan buku tamu'),
(50, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(51, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(52, '2017-01-17 15:29:07', 'koko', 'k@k', 'gugyu', 'acasc'),
(53, '2017-01-17 14:37:00', 'firmanx', 'firman.programmer@gmail.com', 'google.com', 'Tes pesan buku tamu'),
(54, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(55, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(56, '2017-01-17 15:29:07', 'koko', 'k@k', 'gugyu', 'acasc'),
(57, '2017-01-17 14:37:00', 'firmanx', 'firman.programmer@gmail.com', 'google.com', 'Tes pesan buku tamu'),
(58, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(59, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(60, '2017-01-17 14:37:00', 'firmanx', 'firman.programmer@gmail.com', 'google.com', 'Tes pesan buku tamu'),
(61, '2017-01-17 15:29:07', 'koko', 'k@k', 'gugyu', 'acasc'),
(62, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(63, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(64, '2017-01-17 14:37:00', 'firmanx', 'firman.programmer@gmail.com', 'google.com', 'Tes pesan buku tamu'),
(65, '2017-01-17 15:29:07', 'koko', 'k@k', 'gugyu', 'acasc'),
(66, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(67, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(68, '2017-01-17 14:37:00', 'firmanx', 'firman.programmer@gmail.com', 'google.com', 'Tes pesan buku tamu'),
(69, '2017-01-17 15:29:07', 'koko', 'k@k', 'gugyu', 'acasc'),
(70, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(71, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(72, '2017-01-17 14:37:00', 'firmanx', 'firman.programmer@gmail.com', 'google.com', 'Tes pesan buku tamu'),
(73, '2017-01-17 15:29:07', 'koko', 'k@k', 'gugyu', 'acasc'),
(74, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(75, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(76, '2017-01-17 14:37:00', 'firmanx', 'firman.programmer@gmail.com', 'google.com', 'Tes pesan buku tamu'),
(77, '2017-01-17 15:29:07', 'koko', 'k@k', 'gugyu', 'acasc'),
(78, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(79, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(80, '2017-01-17 14:37:00', 'firmanx', 'firman.programmer@gmail.com', 'google.com', 'Tes pesan buku tamu'),
(82, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(83, '2017-01-17 15:29:28', 'caugiu', 'iug@kb', 'tuygus', 'skjbvsiobio'),
(88, '2017-01-21 20:13:09', 'popo', 'e@e', 'popo.com', 'obvaucbai'),
(89, '2017-01-21 20:13:17', 'popo', 'e@e', 'popo.com', 'obvaucbai'),
(90, '2017-01-21 20:13:32', 'bb', 'b@b', 'bbb', 'bbbbbaicgai'),
(91, '2017-01-22 16:02:21', 'd', 'dev@dev', 'd.com', 'skso kao'),
(93, '2017-01-22 17:20:00', 'Firman Akbarx', 'm.firman.aa@gmail.comx', 'toriatec.comx', 'asking somethingx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_tamu`
--
ALTER TABLE `tb_tamu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_tamu`
--
ALTER TABLE `tb_tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
