-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2016 at 09:05 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weinventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(4) NOT NULL,
  `name` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `status` varchar(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `issuedate` datetime NOT NULL,
  `returndate` date DEFAULT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `product_id`, `status`, `name`, `mobile`, `issuedate`, `returndate`, `remarks`) VALUES
(1, 4, 'SR', '', '', '0000-00-00 00:00:00', '2016-11-23', ''),
(2, 1, 'IN', '', '', '0000-00-00 00:00:00', '2016-12-20', ''),
(3, 1, 'SR', '', '', '0000-00-00 00:00:00', NULL, ''),
(4, 2, 'IN', '', '', '2016-10-09 00:00:00', NULL, ''),
(5, 2, 'SOT', 'Anas', '', '2016-10-26 10:13:00', NULL, 'This product has given to Anas vai for testing p'),
(6, 2, 'SOT', 'Parvej', '0157894351', '2016-10-25 11:28:00', '2016-10-29', 'drop test korben na kintu.');

-- --------------------------------------------------------

--
-- Table structure for table `manufacture`
--

CREATE TABLE `manufacture` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacture`
--

INSERT INTO `manufacture` (`id`, `name`, `address`) VALUES
(1, 'Konka', 'Mohakhali,dhaka,bangladesh'),
(2, 'Samsung', 'Islampur, Dhaka,UK'),
(8, 'Jamal', 'uttara'),
(12, 'dgdfgb', 'uttara'),
(15, 'FKDLS DSOPIFJF ', 'uttara'),
(18, 'fjgjjkhjkjkkl', 'Mohakhali,dhaka,bangladesh'),
(20, 'oomhg', 'Mohakhali,dhaka,bangladesh'),
(22, 'oomhgghjkl', 'Mohakhali,dhaka,bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `project_id` int(10) NOT NULL,
  `model_name` varchar(50) NOT NULL,
  `rcv_date` date NOT NULL,
  `imei1` varchar(20) NOT NULL,
  `imei2` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `project_id`, `model_name`, `rcv_date`, `imei1`, `imei2`, `description`) VALUES
(1, 5078, 'mobile 01', '2016-10-25', '789654126', '45697123', 'shf fsdgoidsf difg dfgdioufhsd fhsdf sadf sadfsd fshdf sdf sdhf sdf sf'),
(2, 5078, 'D174', '2016-10-13', '789', '741', 'JHGFJVJUH'),
(4, 5078, 'W1', '2016-10-18', '123', '456', 'dfghfjh'),
(27, 5078, 'x1', '0000-00-00', '465121321321', '54426428422', 'cvgbfgxbjklcvb mbggbg');

-- --------------------------------------------------------

--
-- Table structure for table `product_status`
--

CREATE TABLE `product_status` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` datetime NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_status`
--

INSERT INTO `product_status` (`id`, `product_id`, `status`, `date`, `remarks`) VALUES
(1, 1, 'IN', '2016-10-18 05:04:00', ''),
(2, 3, 'IN', '2016-10-13 00:00:00', ''),
(3, 4, 'SR', '2016-10-09 00:00:00', ''),
(4, 2, 'SOT', '2016-10-25 11:28:00', 'drop test korben na kintu.'),
(5, 5, 'IN', '2016-10-18 00:00:00', ''),
(6, 6, 'IN', '2016-10-18 00:00:00', ''),
(7, 17, 'IN', '2016-10-12 00:00:00', ''),
(14, 27, 'IN', '2016-10-10 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(5) NOT NULL,
  `project_id` varchar(10) NOT NULL,
  `manufacture_id` int(10) NOT NULL,
  `person_name` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_id`, `manufacture_id`, `person_name`, `mobile_number`, `date`) VALUES
(1, '5012', 1, 'asdasd', '132465897', '2016-10-03'),
(2, '5078', 2, 'dsafdasfdf', '655545452', '2016-08-29'),
(23, '3571', 2, 'anas', '12356489', '2016-11-21'),
(24, '3572', 2, 'b', '2', '2016-10-30'),
(25, '5079', 2, 'fsfghjk', '555665', '2016-10-10'),
(28, '5013', 3, '12', '123', '0000-00-00'),
(46, '4702', 8, 'Tamim Akbar', '1548245', '2016-09-06'),
(47, '4703', 8, 'as', 'a', '2016-10-05'),
(48, '5080', 2, 'nodin ali', '1125486', '2016-11-15'),
(49, '4704', 8, 'Sakib al hasan', '485324', '2016-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `product_id` int(10) NOT NULL,
  `project_id` int(10) NOT NULL,
  `reqdate` date NOT NULL,
  `returndate` date NOT NULL,
  `purpose` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `user_id`, `product_id`, `project_id`, `reqdate`, `returndate`, `purpose`) VALUES
(1, 2, 1, 5078, '2016-10-03', '2016-10-14', 'updated info'),
(5, 1, 1, 5078, '2016-10-08', '2016-10-10', 'Amr eta lagbe'),
(6, 1, 1, 5078, '2016-11-09', '2016-11-21', 'asdfghjkl');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `address`, `mobile`, `email`, `username`, `password`) VALUES
(1, 'Gazi Saleh', 'Gulshan Dhaka', 12356, 'gazi@aamra.com.bd', 'gazi', 'asdf'),
(2, 'Zubair Hossian', 'Narrda, Dhaka', 746985, 'sami@gmail.com', 'sami', '123'),
(11, 'wsrfguyjk', 'edrtyjhu.;/', 2123654, 'jkldfjkldfngjkdnfg', 'kamla', '546666612');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacture`
--
ALTER TABLE `manufacture`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_status`
--
ALTER TABLE `product_status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `project_id` (`project_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `manufacture`
--
ALTER TABLE `manufacture`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `product_status`
--
ALTER TABLE `product_status`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
