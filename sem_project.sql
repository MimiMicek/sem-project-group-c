-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 08:47 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sem_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `essays`
--

CREATE TABLE `essays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `answer1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `essays`
--

INSERT INTO `essays` (`id`, `answer1`, `answer2`) VALUES
(1, 'sgsgsgsfgm', ''),
(2, 'answer4-task1', ''),
(3, '', 'answer4-task3'),
(4, '', 'answer1-task3'),
(5, 'answer1-task1', ''),
(6, 'answer1-task1', ''),
(7, '', 'answer1-task3'),
(8, 'answer1-task1', ''),
(9, '', 'answer1-task3'),
(10, 'answer1-task1', ''),
(11, '', 'answer1-task3'),
(12, 'answer1-task1', ''),
(13, '', 'answer1-task3'),
(14, 'answer1-task1', ''),
(15, '', 'answer1-task3'),
(16, '', 'answer1-task3'),
(17, 'answer1-task1', ''),
(18, '', 'answer1-task3'),
(19, 'answer1-task1', ''),
(20, 'answer1-task1', ''),
(21, '', 'answer1-task3'),
(22, '', 'answer1-task3'),
(23, 'answer1-task1', ''),
(24, '', 'answer1-task3'),
(25, 'answer1-task1', ''),
(26, '', 'answer1-task3'),
(27, 'answer1-task1', ''),
(28, 'answer1-task1', ''),
(29, '', 'answer1-task3'),
(30, 'answer1-task1', ''),
(31, '', 'answer1-task3'),
(32, '', 'answer2-task3'),
(33, 'answer2-task1', ''),
(34, '', 'answer2-task3'),
(35, 'answer2-task1', ''),
(36, 'answer4-task1', ''),
(37, '', 'answer4-task3'),
(38, 'answer4-task1', ''),
(39, '', 'answer4-task3'),
(40, 'answer2-task1', ''),
(41, '', 'answer2-task3'),
(42, 'answer1-task1', ''),
(43, '', 'answer2-task3'),
(44, '', 'answer4-task3'),
(45, 'answer4-task1', ''),
(46, 'answer4-task1', ''),
(47, '', 'answer4-task3'),
(48, 'answer3-task1', ''),
(49, '', 'answer2-task3'),
(50, 'answer2-task1', ''),
(51, '', 'answer2-task3'),
(52, 'answer2-task1', ''),
(53, '', 'answer2-task3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `essays`
--
ALTER TABLE `essays`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `essays`
--
ALTER TABLE `essays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
