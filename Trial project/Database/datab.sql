-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 19, 2019 at 10:23 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datab`
--

-- --------------------------------------------------------

--
-- Table structure for table `Faculty`
--

CREATE TABLE `Faculty` (
  `ID` varchar(8) NOT NULL,
  `Nam` varchar(30) DEFAULT NULL,
  `Pass` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Faculty`
--

INSERT INTO `Faculty` (`ID`, `Nam`, `Pass`) VALUES
('FC1615', 'Alex', '1234'),
('FC1616', 'Sam', '5678'),
('FC1617', 'Sorano', '91011');

-- --------------------------------------------------------

--
-- Table structure for table `STUDENT`
--

CREATE TABLE `STUDENT` (
  `Roll` int(8) NOT NULL,
  `Branch` varchar(10) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Marks1` int(3) DEFAULT NULL,
  `Marks2` int(3) DEFAULT NULL,
  `Marks3` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `STUDENT`
--

INSERT INTO `STUDENT` (`Roll`, `Branch`, `Name`, `Marks1`, `Marks2`, `Marks3`) VALUES
(16027, 'ECE', 'Gother', 87, 54, 69),
(16027, 'IT', 'Elizabeth', 85, 65, 42),
(16028, 'CSE', 'Meliodas', 88, 98, 56),
(16050, 'CSE', 'King', 87, 65, 23),
(16066, 'CSE', 'Yato', 98, 65, 32),
(161915, 'EE', 'Ban', 54, 89, 98);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Faculty`
--
ALTER TABLE `Faculty`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `STUDENT`
--
ALTER TABLE `STUDENT`
  ADD PRIMARY KEY (`Roll`,`Branch`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
