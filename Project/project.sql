-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 06:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bid` int(100) NOT NULL,
  `member_id` int(100) NOT NULL,
  `water_bill` int(100) NOT NULL,
  `electricity_bill` int(100) NOT NULL,
  `maintenance` int(100) NOT NULL,
  `fines` int(100) NOT NULL,
  `amt_paid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bid`, `member_id`, `water_bill`, `electricity_bill`, `maintenance`, `fines`, `amt_paid`) VALUES
(1, 101, 450, 800, 1000, 0, 1250),
(2, 102, 500, 745, 1000, 200, 2000),
(3, 103, 350, 950, 1000, 500, 1000),
(4, 104, 500, 400, 1000, 0, 1500),
(5, 105, 450, 800, 1000, 200, 2250);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `member_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`member_id`, `username`, `password`) VALUES
(101, 'rakeshsharma101@sms', 'rakesh'),
(102, 'ayushchaturvedi102@sms', 'ayush'),
(103, 'sameerjadhav103@sms', 'sameer'),
(105, 'ajaypande105@sms', 'ajay'),
(104, 'anushkachatterjee104@sms ', 'anushka');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `member_id` int(100) NOT NULL,
  `member_name` varchar(100) NOT NULL,
  `wife_name` varchar(100) NOT NULL,
  `son_name` varchar(100) NOT NULL,
  `daughter_name` varchar(100) NOT NULL,
  `flats` int(100) NOT NULL,
  `post` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`member_id`, `member_name`, `wife_name`, `son_name`, `daughter_name`, `flats`, `post`, `type`) VALUES
(101, 'Rakesh Sharma', 'Shivani Sharma', 'NA', 'Sakshi Sharma', 2, 'Treasurer', 'Owner'),
(103, 'Sameer Jadhav ', 'Suanayana Jadhav', 'Sahil Jadhav, Siddhart Jadhav', 'NA', 2, 'NA', 'Owner'),
(105, 'Ajay Pandey', 'Juhi Pandey', 'NA', 'NA', 1, 'Spokesperson ', 'Owner'),
(102, 'Ayush Chaturvedi ', 'NA', 'NA', 'NA', 0, 'NA', 'Rented'),
(104, 'Anushka Chatterjee', 'NA', 'NA', 'NA', 0, 'NA', 'Rented');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
