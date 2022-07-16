-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 09:39 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `fb_username_password`
--

CREATE TABLE `fb_username_password` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fb_username_password`
--

INSERT INTO `fb_username_password` (`id`, `username`, `password`, `added_on`) VALUES
(1, 'edtech', 'dfrtt', '0000-00-00 00:00:00'),
(2, 'jieud', '25489', '0000-00-00 00:00:00'),
(3, 'dkeujd', '2156987456321589', '0000-00-00 00:00:00'),
(4, 'timermaster', 'dfery365989', '0000-00-00 00:00:00'),
(5, 'Hasanurrahama', 'Hasanurrahama1364897', '2021-08-15 10:11:12'),
(6, 'qihf', '125897458963', '2021-08-15 10:24:53'),
(7, 'dkier', '12569874', '2021-08-15 10:25:59'),
(8, 'kohili', '2346987', '2021-08-15 10:26:53'),
(9, 'futir', '123647899', '2021-08-15 10:27:27'),
(10, 'jodu', 'de25978/*-+65457898', '2021-08-15 10:27:55'),
(11, 'rubek]', 'dfrtt', '0000-00-00 00:00:00'),
(12, 'kejud', '25489', '0000-00-00 00:00:00'),
(13, 'dkeid]', '2156987456321589', '0000-00-00 00:00:00'),
(14, 'keidye', 'dfery365989', '0000-00-00 00:00:00'),
(15, 'deuid', 'Hasanurrahama1364897', '2021-08-15 10:11:12'),
(16, 'mkjeu', '125897458963', '2021-08-15 10:24:53'),
(17, 'aienf', '12569874', '2021-08-15 10:25:59'),
(18, 'akeif', '2346987', '2021-08-15 10:26:53'),
(19, 'kair', '123647899', '2021-08-15 10:27:27'),
(20, 'mosu', 'de25978/*-+65457898', '2021-08-15 10:27:55'),
(21, 'dkeidy', '2156987456321589', '0000-00-00 00:00:00'),
(22, 'dkeud', 'dfery365989', '0000-00-00 00:00:00'),
(23, 'leoyd', 'dfrtt', '0000-00-00 00:00:00'),
(24, 'Hloo', '25489', '0000-00-00 00:00:00'),
(25, 'rabbi', '2156987456321589', '0000-00-00 00:00:00'),
(26, 'timermaster', 'dfery365989', '0000-00-00 00:00:00'),
(27, 'sabbir_rahman', '236548/*-+der', '2021-08-16 10:05:27'),
(28, 'Sheikh_awal', '123456697/*-+=-)(*&^%$#@', '2021-08-16 10:06:20'),
(29, 'abdul_karim12365', 'abdoi589762458/*-++_)(*&^%$#@!', '2021-08-16 10:10:38'),
(30, 'TangailDhakaMirpur', 'diekdiediekdooejdiejd', '2021-08-16 10:21:17'),
(31, 'frgtyh25698', '98548', '2021-08-16 12:21:36'),
(32, 'rabbihossain98547', 'rabbihossain98547', '2021-08-17 04:21:11'),
(33, 'edtech', 'edtech/*-+_*&%', '2021-08-17 04:31:58'),
(34, 'raj', '123456789*/$%', '2021-09-15 10:44:05'),
(35, 'rabbihossain', '555555555', '2021-09-15 10:46:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fb_username_password`
--
ALTER TABLE `fb_username_password`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fb_username_password`
--
ALTER TABLE `fb_username_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
