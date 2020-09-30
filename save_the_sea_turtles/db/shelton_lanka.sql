-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 19, 2020 at 05:59 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shelton_lanka`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `commentID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `itemID` int(11) NOT NULL,
  `date` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY (`commentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `empID` int(11) NOT NULL AUTO_INCREMENT,
  `empName` varchar(20) NOT NULL,
  `empPost` varchar(10) NOT NULL,
  `empBranch` varchar(20) NOT NULL,
  `empPhone` int(10) NOT NULL,
  `empAddress` varchar(50) NOT NULL,
  `empOtherDetails` varchar(100) NOT NULL,
  `empRegDate` date NOT NULL,
  `empPassword` varchar(10) NOT NULL,
  PRIMARY KEY (`empID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`empID`, `empName`, `empPost`, `empBranch`, `empPhone`, `empAddress`, `empOtherDetails`, `empRegDate`, `empPassword`) VALUES
(1, 'lakshan', 'Manager', 'Galle', 715597698, '31/82 demanhandiya', 'previously work as manager in nawaloka lanka', '2020-03-10', 'uditha123'),
(3, 'Nishani', 'Cashier', 'Kandy', 778910970, 'pilimathalawa', 'she is a self employee and good business women', '2019-12-24', 'nis123'),
(2, 'kavinda', 'Manager', 'Negombo', 778940875, 'kimbulapitiya', 'he id a degree holder', '2018-01-14', 'kav123');

-- --------------------------------------------------------

--
-- Table structure for table `getinvolved`
--

DROP TABLE IF EXISTS `getinvolved`;
CREATE TABLE IF NOT EXISTS `getinvolved` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `details` varchar(100) NOT NULL,
  `images` longblob NOT NULL,
  `contact` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `getinvolved`
--

INSERT INTO `getinvolved` (`ID`, `name`, `details`, `images`, `contact`) VALUES
(8, 'uditha', 'jhhvddhq', 0x74312e6a7067, 1547896523),
(9, 'uditha', 'jhhvddhq', 0x74312e6a7067, 1547896523),
(10, 'uditha', 'jhhvddhq', 0x74312e6a7067, 1547896523);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(30) NOT NULL,
  `Message` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `Email`, `Message`) VALUES
(24, 'www@gmail.com', 'ssss'),
(4, 'thenuki@gmail.com', 'looks good'),
(5, '', ''),
(6, '', ''),
(7, '', ''),
(8, '', ''),
(9, '', ''),
(10, '', ''),
(11, 'maleesha617@gmail.com', 'wedfghjk'),
(12, 'maleesha617@gmail.com', 'wedfghjk'),
(13, 'maleesha617@gmail.com', 'wedfghjk'),
(14, 'maleesha617@gmail.com', 'good'),
(15, 'maleesharanathunga@gmail.com', ''),
(16, 'maleesharanathunga@gmail.com', ''),
(17, 'maleesha617@gmail.com', 'ss'),
(18, 'maleesha617@gmail.com', 'ss'),
(19, 'maleesha617@gmail.com', 'ss'),
(20, 'maleesha617@gmail.com', 'ss'),
(21, 'maleesha617@gmail.com', 'ss'),
(22, 'maleesha617@gmail.com', 'ss'),
(23, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phoneCode` int(11) NOT NULL,
  `phone` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `gender`, `email`, `phoneCode`, `phone`) VALUES
(19, 'abc', 'abc', 'm', 'abc@gmail.com', 977, 1254789),
(18, 'cat', 'cat', 'm', 'cat@gmail.com', 977, 1254785),
(9, 'thenuki', '119', 'f', 'thenu@gmail.com', 977, 778910970),
(7, 'poorni', '12345', 'f', 'poorni@gmail.com', 973, 11323542312),
(11, 'nishani', '8832', 'f', 'nishani@gmail.com', 977, 778878832),
(12, 'duneendra', '123', 'm', 'fuerddrd@gmail.com', 977, 778915745),
(13, 'Uditha', '132', 'm', 'jgud@sc.dc', 974, 123456),
(14, 'qwert', 'qwert', 'm', 'uditha.nayanagith@gmail.com', 974, 4567890),
(15, 'malee', 'malee', 'f', 'maleesha617@gmail.com', 974, 2843132),
(16, 'uditha', '123', 'm', 'uditha617@gmail.com', 974, 112843132),
(17, 'mmm123', '1234', 'm', 'maleesharanathunga@gmail.com', 977, 4444444),
(20, 'rrrr', 'rrrr', 'm', 'rrrr@rrr.rrr', 977, 1234567),
(21, 'qwe', 'qwe', 'f', 'aawwa@gmail.com', 978, 4444444);

-- --------------------------------------------------------

--
-- Table structure for table `takeaction`
--

DROP TABLE IF EXISTS `takeaction`;
CREATE TABLE IF NOT EXISTS `takeaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `PhoneNo` int(10) NOT NULL,
  `Message` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `takeaction`
--

INSERT INTO `takeaction` (`id`, `Name`, `Email`, `PhoneNo`, `Message`) VALUES
(1, 'Namal', 'namal@3182@gmail.com', 312233002, 'sdde'),
(2, 'nishani', 'ni@gmail.com', 778878832, 'eee'),
(3, 'Nishani', 'nishani@gmail.com', 778878832, 'dddd'),
(4, 'maleesha', 'sss', 154265866, 'sssdddfff'),
(5, 'maleesha', 'malee12@gmial.com', 154265866, 'dsdsdsdsd'),
(6, 'maleesha', 'malee1233@gmial.com', 125478965, 'fwewfd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(50) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `fullname`, `contact`, `password`) VALUES
('123@gmail.com', 'as', '9999999999', '123'),
('dean@gmail.com', 'Dean', '0776453722', 'dde'),
('kuma@gmail.com', 'kavinda', '0778910971', '1234'),
('q@gmail.com', 'qqqqqq', '9999999999', 'q'),
('romeshfernandodean98@gmail.com', 'Romesh fernando', '0789998052', '1998');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
