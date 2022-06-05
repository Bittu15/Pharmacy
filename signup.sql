-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 10:51 AM
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
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `bingo`
--

CREATE TABLE `bingo` (
  `id` int(2) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bingo`
--

INSERT INTO `bingo` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `price`) VALUES
(1, 'IC1', 'aciloc 150', '1*20', '', '100.00'),
(2, 'IC2', 'calpol 650', '1*15', '', '50.00'),
(3, 'IC3', 'ecosprin 75', '1*15', '', '250.00'),
(4, 'IC4', 'evion 400 ', '1*10', '', '230.00'),
(5, 'IC5', 'Fluria 200', '1*4', '', '200.00'),
(6, 'IC6', 'Itosan 100', '1*10', '', '50.00'),
(7, 'IC7', 'Roxizyne 20', '1*10', '', '70.00'),
(8, 'IC8', 'Azithro 250', '1*5', '', '50.00'),
(9, 'IC9', 'Carcal 60k', '1*4', '', '110.00'),
(10, 'IC10', 'Liv 52', '1*6', '', '450.00'),
(11, 'IC11', 'Alex syrup', '', '', '70.00'),
(12, 'IC12', 'Timzyme', '', '', '50.00');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `serial_no.` int(3) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Subject` varchar(70) NOT NULL,
  `Message` varchar(250) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`serial_no.`, `Name`, `Email`, `Subject`, `Message`, `date_time`) VALUES
(20, 'Palak Jain', 'palakavjain@gmail.com', 'chinu', 'chipkali', '2022-04-19 10:26:16'),
(21, 'Palak Jain', 'palakavjain@gmail.com', 'gvfghfyt', 'ncjsbchiuash foea', '2022-04-19 10:26:30'),
(22, 'Palak Jain', 'palakavjain@gmail.com', 'gvfghfyt', 'ncjsbchiuash foea', '2022-04-19 10:28:52'),
(23, 'Palak Jain', 'palakavjain@gmail.com', 'checking', 'nsjkbcksabhf', '2022-04-19 10:29:10'),
(24, 'Palak Jain', 'palakavjain@gmail.com', 'checking', 'nsjkbcksabhf', '2022-04-19 10:29:55'),
(25, 'Palak Jain', 'palakavjain@gmail.com', 'bhvfgtcfrtd', 'chinu darling', '2022-04-19 10:30:08'),
(26, 'Palak Jain', 'palakavjain@gmail.com', 'ninja technique', 'ayo hussup', '2022-04-27 14:36:20'),
(27, 'virag', 'vragvayoyo@gmail.com', 'hihihihi', 'or kya me to phone chala riya hu', '2022-04-27 14:38:52'),
(28, 'chirag', 'CJAIN9499@GMAIL.COM', 'BBVJ', 'FF', '2022-04-29 13:23:26'),
(29, 'CHIRAG', 'CJAIN9499@GMAIL.COM', 'GFU', 'HJ', '2022-04-29 13:25:17'),
(30, 'SHREYANSH SOKAL', 'palakavjain@gmail.com', 'JAain', 'jain', '2022-04-29 13:26:53'),
(31, 'Palak Jain', 'palakavjain@gmail.com', 'checking', 'jbhvgh', '2022-05-01 17:40:37'),
(32, 'Palak Jain', 'palakavjain@gmail.com', 'ni btana', 'jingalalahuhu', '2022-05-03 14:34:51'),
(33, 'Palak Jain', 'palakavjain@gmail.com', 'ni btana', 'jingalalahuhu', '2022-05-03 15:10:28');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `serial_no.` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` int(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`serial_no.`, `name`, `email`, `number`, `password`, `datetime`) VALUES
(1, 'palak', 'bhavya@gmail.com', 0, 'makwana10', '2022-04-19 12:21:26'),
(2, '', '', 0, '', '2022-04-29 13:45:43'),
(3, '', '', 0, '', '2022-04-29 13:49:15'),
(4, '', '', 0, '', '2022-04-29 13:50:23'),
(5, '', '', 0, '', '2022-04-29 13:56:10'),
(6, '', '', 0, '', '2022-04-29 14:01:28'),
(7, '', '', 0, '', '2022-04-29 14:03:02'),
(8, '', '', 0, '', '2022-04-29 14:05:48'),
(9, '', '', 0, '', '2022-04-29 14:06:00'),
(10, '', '', 0, '', '2022-04-29 14:08:25'),
(12, 'shrey', 'palakavjain@gmail.com', 0, 'Behappybro', '2022-04-29 21:23:22'),
(13, 'shrey', 'palakavjain@gmail.com', 16, 'Behappybro', '2022-04-29 21:25:19'),
(14, 'Palak Jain', 'palakavjain@gmail.com', 16, 'Behappybro', '2022-04-29 21:26:02'),
(15, 'chirag', 'cjain@gmail.com', 16, 'Behappybro', '2022-04-29 23:10:44'),
(16, 'bhvya', 'bhavi@gmail.com', 2147483647, 'blue', '2022-04-30 17:04:23'),
(17, 'bing', 'bing@gmail.com', 2147483647, 'book', '2022-04-30 17:08:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bingo`
--
ALTER TABLE `bingo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_code` (`product_code`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`serial_no.`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`serial_no.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bingo`
--
ALTER TABLE `bingo`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `serial_no.` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `serial_no.` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
