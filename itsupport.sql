-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2017 at 07:46 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itsupport`
--
CREATE DATABASE IF NOT EXISTS `itsupport` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `itsupport`;

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

DROP TABLE IF EXISTS `cases`;
CREATE TABLE `cases` (
  `id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '1',
  `category` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `owner` int(11) NOT NULL,
  `eta` timestamp NULL DEFAULT NULL,
  `nextstatus` int(11) DEFAULT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `created`, `active`, `category`, `status`, `owner`, `eta`, `nextstatus`, `comment`) VALUES
(1, '2017-09-05 16:55:46', 1, 0, 1, 1, '2017-09-01 10:15:00', 5, 'Lånedator h5123b1'),
(2, '2017-09-05 16:55:46', 0, 0, 5, 1, '2017-08-30 16:00:00', NULL, ''),
(3, '2017-09-05 16:55:46', 1, 0, 2, 2, '2017-09-01 20:00:00', 1, 'Lånedator är på gång'),
(4, '2017-09-05 16:55:46', 1, 0, 3, 3, '2017-09-21 06:00:00', 5, ''),
(5, '2017-09-05 16:55:46', 1, 0, 2, 1, '2017-09-05 22:00:00', 1, 'Vi väntar');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `namn` tinytext NOT NULL,
  `rights` varchar(1) NOT NULL,
  `tabl` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `namn`, `rights`, `tabl`) VALUES
(1, 'datorer', 'd', 'lista_datorer'),
(2, 'nycklar', 'n', 'lista_nycklar'),
(3, 'taggar', 't', 'lista_taggar');

-- --------------------------------------------------------

--
-- Table structure for table `rights`
--

DROP TABLE IF EXISTS `rights`;
CREATE TABLE `rights` (
  `id` int(11) NOT NULL,
  `shortname` varchar(1) NOT NULL,
  `longname` tinytext NOT NULL,
  `descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rights`
--

INSERT INTO `rights` (`id`, `shortname`, `longname`, `descr`) VALUES
(1, 'd', 'dator', 'Tillgång till listan över datorer.'),
(2, 'r', 'läs', 'Rättigheten att läsa.'),
(3, 'n', 'nycklar', 'Tillgång till listan över nycklar.'),
(4, 't', 'taggar', 'Tillgång till listan över taggar.'),
(5, 'w', 'skriva', 'Rättigheten att skriva.'),
(6, 'a', 'admin', 'Har rättigheter till att göra allt.');

-- --------------------------------------------------------

--
-- Table structure for table `statuscodes`
--

DROP TABLE IF EXISTS `statuscodes`;
CREATE TABLE `statuscodes` (
  `id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `description` text NOT NULL,
  `prio` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statuscodes`
--

INSERT INTO `statuscodes` (`id`, `name`, `description`, `prio`) VALUES
(1, 'Lånedator', 'Eleven har fått en lånedator', 400),
(2, 'Saknar dator', 'Eleven saknar dator', 100),
(3, 'Dator på lagning', 'Elevens dator är på lagning', 500),
(4, 'Redo för utlämning', 'Elevens dator är redo att lämnas ut', 900),
(5, 'Slut', 'Slut på ärendet', 999);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` tinytext NOT NULL,
  `rights` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `rights`) VALUES
(1, 'user', ''),
(2, 'randomuser1', ''),
(3, 'randomuser2', ''),
(4, 'admin', 'a'),
(5, 'lärare1', 'rtnd'),
(6, 'rektor', 'rtnd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rights`
--
ALTER TABLE `rights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuscodes`
--
ALTER TABLE `statuscodes`
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
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rights`
--
ALTER TABLE `rights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `statuscodes`
--
ALTER TABLE `statuscodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
