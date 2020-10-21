-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 21, 2020 at 08:32 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `to_do`
--

-- --------------------------------------------------------

--
-- Table structure for table `tekstas`
--

CREATE TABLE `tekstas` (
  `ID` int(11) NOT NULL,
  `Pavadinimas` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Tekstas` varchar(500) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `tekstas`
--

INSERT INTO `tekstas` (`ID`, `Pavadinimas`, `Tekstas`, `Data`) VALUES
(6, 'adscasdcasdc', 'sadcasdcadsc', '2020-10-21 22:10:37'),
(7, 'dgfbdgfb', 'dfgbdgfb', '2020-10-21 22:37:38'),
(14, 'sdfvdsfvsdfvsdf', 'dsafvsdfv', '2020-10-21 23:21:55'),
(20, 'asdvasdvadsv', 'vsadvasdv', '2020-10-21 23:23:41'),
(21, 'asdvasdvasd', 'adsvasdv', '2020-10-21 23:23:45'),
(22, 'Viktorija', 'Padaryti namu darbus', '2020-10-21 23:24:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tekstas`
--
ALTER TABLE `tekstas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tekstas`
--
ALTER TABLE `tekstas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
