-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 07:28 PM
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
-- Database: `sem_project_c`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `answer1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer3` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer4` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer5` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer6` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer7` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attention`
--

CREATE TABLE `attention` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `spacePressed` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spatial_maze`
--

CREATE TABLE `spatial_maze` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `answer1` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer2` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timestamps`
--

CREATE TABLE `timestamps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dateTime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pageName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `attention`
--
ALTER TABLE `attention`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `spatial_maze`
--
ALTER TABLE `spatial_maze`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `timestamps`
--
ALTER TABLE `timestamps`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attention`
--
ALTER TABLE `attention`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spatial_maze`
--
ALTER TABLE `spatial_maze`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timestamps`
--
ALTER TABLE `timestamps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
