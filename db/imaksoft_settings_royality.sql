-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2023 at 12:43 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mdfcapitals`
--

-- --------------------------------------------------------

--
-- Table structure for table `imaksoft_settings_royality`
--

CREATE TABLE `imaksoft_settings_royality` (
  `id` int(10) NOT NULL,
  `plan` varchar(150) NOT NULL,
  `direct` varchar(255) NOT NULL,
  `team` varchar(255) NOT NULL,
  `percentage` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imaksoft_settings_royality`
--

INSERT INTO `imaksoft_settings_royality` (`id`, `plan`, `direct`, `team`, `percentage`, `datetime`) VALUES
(1, 'silver', '10', '50', '4', '2023-12-15 12:39:59'),
(2, 'gold', '15', '200', '3', '2023-12-15 12:39:59'),
(3, 'platinum', '20', '500', '2', '2023-12-15 12:40:39'),
(4, 'diamond', '25', '1000', '1', '2023-12-15 12:40:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imaksoft_settings_royality`
--
ALTER TABLE `imaksoft_settings_royality`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imaksoft_settings_royality`
--
ALTER TABLE `imaksoft_settings_royality`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
