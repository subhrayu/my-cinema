-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2016 at 01:41 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(20) NOT NULL,
  `moviename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `moviename`) VALUES
(1, 'Fast and Furious'),
(2, 'Conjuring 2');

-- --------------------------------------------------------

--
-- Table structure for table `show_details`
--

CREATE TABLE `show_details` (
  `movieid` int(10) NOT NULL,
  `moviename` varchar(50) NOT NULL,
  `theater` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `showtime` varchar(30) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `show_details`
--

INSERT INTO `show_details` (`movieid`, `moviename`, `theater`, `date`, `showtime`, `price`) VALUES
(1, 'Fast and Furious', 'INOX SouthCity Mall', '12July2016', '1500', 300),
(2, 'Conjuring 2', 'INOX CityCentre', '12Jul2016', '2100', 150),
(3, 'Fast and Furious', 'INOX CityCentre', '12Jul2016', '2100', 300),
(4, 'Fast and Furious', 'INOX CityCentre', '12Jul2016', '2100', 300),
(5, 'Fast and Furious', 'INOX CityCentre', '12Jul2016', '2100', 300),
(6, 'Fast and Furious', 'INOX CityCentre', '12Jul2016', '2100', 300),
(7, 'Fast and Furious', 'INOX CityCentre', '12Jul2016', '2105', 200),
(8, 'Conjuring 2', 'INOX SouthCity Mall', '14Jul2016', '1415', 300),
(9, 'Fast and Furious', 'INOX SouthCity Mall', '13Jul2016', '1515', 100),
(10, 'Fast and Furious', 'INOX SouthCity Mall', '16Jul2016', '1315', 300),
(11, 'Conjuring 2', 'INOX HilandPark', '16Jul2016', '1900', 300),
(12, 'Fast and Furious', 'INOX Hind', '16Jul2016', '1600', 300),
(13, 'Fast and Furious', 'INOX SouthCity Mall', '16Jul2016', '1530', 270);

-- --------------------------------------------------------

--
-- Table structure for table `th1_booking`
--

CREATE TABLE `th1_booking` (
  `id` int(50) NOT NULL,
  `12July2016_1700` varchar(10) NOT NULL,
  `16Jul2016_1315` varchar(10) DEFAULT NULL,
  `16Jul2016_1530` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `th1_booking`
--

INSERT INTO `th1_booking` (`id`, `12July2016_1700`, `16Jul2016_1315`, `16Jul2016_1530`) VALUES
(1, '16+10', NULL, NULL),
(2, '11+10', NULL, NULL),
(3, '13+13', NULL, NULL),
(4, '20+29', NULL, NULL),
(5, '20+30', NULL, NULL),
(6, '14+13', NULL, NULL),
(7, '14+14', NULL, NULL),
(10, '1+1', NULL, NULL),
(11, '1+2', NULL, NULL),
(12, '1+1', NULL, NULL),
(13, '1+2', NULL, NULL),
(14, '20+1', NULL, NULL),
(15, '20+2', NULL, NULL),
(16, '20+3', NULL, NULL),
(17, '1+14', NULL, NULL),
(18, '1+15', NULL, NULL),
(19, '20+15', NULL, NULL),
(20, '20+16', NULL, NULL),
(21, '20+17', NULL, NULL),
(22, '1+1', NULL, NULL),
(23, '1+2', NULL, NULL),
(24, '1+3', NULL, NULL),
(25, '2+1', NULL, NULL),
(26, '2+2', NULL, NULL),
(27, '2+3', NULL, NULL),
(28, '2+4', NULL, NULL),
(29, '2+5', NULL, NULL),
(30, '1+1', NULL, NULL),
(31, '1+7', NULL, NULL),
(32, '1+8', NULL, NULL),
(33, '', '1+12', NULL),
(34, '', '1+15', NULL),
(35, '', '1+16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `th2_booking`
--

CREATE TABLE `th2_booking` (
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `th3_booking`
--

CREATE TABLE `th3_booking` (
  `id` int(10) NOT NULL,
  `16Jul2016_1900` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `th3_booking`
--

INSERT INTO `th3_booking` (`id`, `16Jul2016_1900`) VALUES
(1, '2+5'),
(2, '2+6'),
(3, '2+9'),
(4, '1+1'),
(5, '1+2');

-- --------------------------------------------------------

--
-- Table structure for table `th4_booking`
--

CREATE TABLE `th4_booking` (
  `id` int(10) NOT NULL,
  `16Jul2016_1600` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `id` int(5) NOT NULL,
  `thname` varchar(50) NOT NULL,
  `rows` int(10) NOT NULL,
  `columns` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`id`, `thname`, `rows`, `columns`) VALUES
(1, 'INOX SouthCity Mall', 20, 30),
(2, 'INOX CityCentre', 25, 18),
(3, 'INOX HilandPark', 30, 28),
(4, 'INOX Hind', 40, 32);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `show_details`
--
ALTER TABLE `show_details`
  ADD PRIMARY KEY (`movieid`);

--
-- Indexes for table `th1_booking`
--
ALTER TABLE `th1_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `th2_booking`
--
ALTER TABLE `th2_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `th3_booking`
--
ALTER TABLE `th3_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `th4_booking`
--
ALTER TABLE `th4_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `show_details`
--
ALTER TABLE `show_details`
  MODIFY `movieid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `th1_booking`
--
ALTER TABLE `th1_booking`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `th2_booking`
--
ALTER TABLE `th2_booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `th3_booking`
--
ALTER TABLE `th3_booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `th4_booking`
--
ALTER TABLE `th4_booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `theater`
--
ALTER TABLE `theater`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
