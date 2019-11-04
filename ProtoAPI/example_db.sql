-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 21, 2019 at 11:29 PM
-- Server version: 5.6.43
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cp255290_proto`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `ID` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password_hash` varchar(32) COLLATE utf8_bin NOT NULL,
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  `profile_pic` text COLLATE utf8_bin,
  `apiKey` varchar(32) COLLATE utf8_bin DEFAULT NULL,
  `type` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`ID`, `email`, `password_hash`, `username`, `profile_pic`, `apiKey`, `type`) VALUES
(1, 'barnista@gmail.com', '8e3b4f8d1345f6d108d5b18b3c7e60db', 'Barnista', '', '054b7f031189b2e850d990434051bf9f', 'admin'),
(2, 'fealucus@gmail.com', 'fcd115697f7a0de8204c43bbfa52b0bc', 'Fealucus', NULL, 'bc51df6c10ddde6a56caed06e630b088', 'user'),
(4, 'nollet@gmail.com', '0423468d132623f49edf3ed5bc6301fc', 'KoolAid', '', 'c4415b22900a4419e888658bea777ff3', 'user'),
(6, 'fea@gmail.com', '3aecfc464daaab5690f0128b151ebb98', 'unknown', '', 'ec6102cfd578458966c4915d663eff16', 'user'),
(7, 'root@localhost', '8e3b4f8d1345f6d108d5b18b3c7e60db', 'barnista@gmail.com', '', 'b1a4b2518dbbdd47dd4a713d5cd1df94', 'user'),
(8, 'caliton@gmail.com', '8025d41239f1ecac04fe6b1e9e48f2b3', 'Caliton', '', 'a7419a4b96c03da2d391b45ec0607187', 'user'),
(10, 'caliton27@gmail.com', '8025d41239f1ecac04fe6b1e9e48f2b3', 'Caliton', '', 'd3b342c9b2d3d2b1971962b33b5e4535', 'user'),
(11, 'trialation.development@gmail.com', '420da15267776007fd5600e149f0383a', 'Trialation', '', '420da15267776007fd5600e149f0383a', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `example`
--

CREATE TABLE `example` (
  `ID` int(11) NOT NULL,
  `text` varchar(400) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `value` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `example`
--

INSERT INTO `example` (`ID`, `text`, `date`, `value`) VALUES
(5, 'Pork sausage 2 packs', '2019-07-28 10:14:11', -88),
(6, 'A big bottle of Pepsi', '2019-07-28 10:14:52', -28),
(10, 'House renting bill', '2019-07-28 10:35:19', -8000),
(12, 'Pork sausage 2 packs', '2019-08-02 10:41:11', -400),
(13, 'A bar of soap', '2019-08-02 12:42:14', -90),
(14, 'Winning lottery', NULL, 9000),
(16, 'Investing in real estate', NULL, -40000);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(400) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `email`, `title`, `description`, `date`) VALUES
(3, 'barnista@gmail.com', 'You sux!', 'akdsaksdlaskdjalksndkjajsfnbajkbsdmajbskdmbasjdbhamsd', '2019-08-21 16:29:18'),
(2, 'barnista@gmail.com', 'asfkjasflas', 'm,nbjbjhvbvnbvhjbkjhkjhjkj', '2019-08-21 16:29:18'),
(4, 'trialation.development@gmail.com', 'You sux!', '', '2019-08-21 16:29:18'),
(5, 'trialation.development@gmail.com', 'You sux!', '', '2019-08-21 16:29:18'),
(6, '590107030002@dpu.ac.th', 'You sux!', 'Booooo', '2019-08-21 16:29:18'),
(7, '590107030002@dpu.ac.th', 'You sux!', 'Booooo', '2019-08-21 16:29:18'),
(8, '590107030002@dpu.ac.th', 'You sux!', 'Booooo', '2019-08-21 16:29:18'),
(9, 'barnista@gmail.com', 'You sux!', '', '2019-08-21 16:29:18'),
(10, 'barnista@gmail.com', 'You sux!', '', '2019-08-21 16:29:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `example`
--
ALTER TABLE `example`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `example`
--
ALTER TABLE `example`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
