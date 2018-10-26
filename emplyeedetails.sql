-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2018 at 02:34 AM
-- Server version: 10.1.34-MariaDB
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
-- Database: `emplyeedetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE `customerdetails` (
  `customerID` int(255) NOT NULL,
  `custname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `contactName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerdetails`
--

INSERT INTO `customerdetails` (`customerID`, `custname`, `city`, `contactName`) VALUES
(1, 'varsha', 'kalyan', 'maria'),
(2, 'rajat', 'mumbai', 'lawrence'),
(3, 'snehali pathak', 'mumbai', 'payal singh'),
(4, 'minal', 'kolkatta', 'nitee rajput');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `salary` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `city`, `description`, `salary`, `date`, `time`) VALUES
(1, 'varsha', 'kalyan', 'software engineer', 12000, '', ''),
(2, 'shamal kadam', 'bhandup', 'software engineer', 15000, '', ''),
(3, 'durgesh bavane', 'kalyan', 'student', 0, '', ''),
(5, 'rajat pathak', 'mumbai', 'accountant', 25000, '', ''),
(6, 'kundan', 'kalyan', 'employee', 12000, '', ''),
(6, 'aish pawar', 'latur', 'student', 0, '', ''),
(7, 'pooja patil', 'mumbai', 'software engineer', 80000, '', ''),
(8, 'akhilesh pal', 'thane', 'collector', 52000, '', ''),
(9, 'ankush jogdand', 'latur', 'system engineer', 32000, '', ''),
(10, 'siddhant navratna', 'akurdi', ' software trainee', 12000, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `customerID` int(255) NOT NULL,
  `custname` int(255) NOT NULL,
  `cities` int(11) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `customerID` int(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `orderID` int(255) NOT NULL,
  `orderDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`customerID`, `city`, `orderID`, `orderDate`) VALUES
(5, '', 123, '12/5/2018'),
(7, '', 23, '12/9/2018'),
(5, '', 77, '12/5/2018'),
(4, '', 77, '2/1/2018'),
(5, 'kalyan', 22, '4/5/2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`customerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `customerID` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
