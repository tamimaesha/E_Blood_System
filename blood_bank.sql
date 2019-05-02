-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2016 at 06:40 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor_reg`
--

CREATE TABLE IF NOT EXISTS `donor_reg` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `district` varchar(20) NOT NULL,
  `last_date` date NOT NULL,
  `mob_num` varchar(11) NOT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donor_reg`
--

INSERT INTO `donor_reg` (`user_id`, `name`, `password`, `email`, `age`, `gender`, `blood_group`, `district`, `last_date`, `mob_num`, `address`) VALUES
(2, 'Foujia Sadia', '12345678', 'nahian@gmail.com', 29, 'Female', 'AB+', 'Chittagong', '2015-12-11', '01812980657', 'Patherghata, Chittagong'),
(3, 'Humaira Adiba', '12345678', 'nahiangg@gmail.com', 29, 'Female', 'B+', 'Chittagong', '2015-12-11', '01913786543', 'Gulshan, Dhaka'),
(10, 'Dia Chowdhury', '123456', 'd@gmail.com', 21, 'Female', 'A+', 'Dhaka', '2015-03-12', '01712890765', 'Nasirabad Housing Society'),
(13, 'Nur Jahan', '123456', 'jahan@gmail.com', 34, 'Female', 'O-', 'Faridpur', '2014-11-21', '01765432123', 'Ashraf Ali Road, Patherghata, Chittagong, Faridpur.');

-- --------------------------------------------------------

--
-- Table structure for table `health_tips`
--

CREATE TABLE IF NOT EXISTS `health_tips` (
  `tips_id` int(11) NOT NULL,
  `tips_title` varchar(200) NOT NULL,
  `tips_description` text NOT NULL,
  `upload_date` varchar(32) NOT NULL,
  `tips_image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `health_tips`
--

INSERT INTO `health_tips` (`tips_id`, `tips_title`, `tips_description`, `upload_date`, `tips_image`) VALUES
(1, 'hbnb', '  nbnbnbn  nn', '02-26-16', '11385639_1453426108290413_636264643_n.jpg'),
(3, 'Escape for cancer', ' fsdfsdfsfsdfs', '02-25-16', 'BDTP.jpg'),
(9, '', ' ', '02-27-16', 'fruit1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `amount` int(2) NOT NULL,
  `needed_date` date NOT NULL,
  `district` varchar(20) NOT NULL,
  `mob_num` varchar(11) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`user_id`, `name`, `email`, `password`, `blood_group`, `amount`, `needed_date`, `district`, `mob_num`, `address`) VALUES
(1, 'Suma Sultana', 'suma@yahoo.com', '123456', 'B-', 2, '2016-02-15', 'Comilla', '01765432123', 'Comilla General  Hospital'),
(2, 'Wasif Rahman', 'wasif@yahoo.com', '123456', 'AB-', 1, '2016-02-26', 'Feni', '01817654230', 'Chittagong Medical Hospital'),
(3, 'Abdul Khalak', 'khalak@gmail.com', '123456', 'O+', 1, '2016-03-21', 'Bandarban', '01812980657', 'National Hospital, Mehedibagh'),
(4, 'Mahir Labib', 'mahir@gmail.com', '123456', 'A-', 2, '2016-02-26', 'Feni', '01912098678', 'Apollo Hospital, Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE IF NOT EXISTS `user_information` (
  `user_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`user_id`, `name`, `email`, `password`) VALUES
(1, 'Nahian Chowdhury', 'nahian@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor_reg`
--
ALTER TABLE `donor_reg`
  ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `health_tips`
--
ALTER TABLE `health_tips`
  ADD PRIMARY KEY (`tips_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor_reg`
--
ALTER TABLE `donor_reg`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `health_tips`
--
ALTER TABLE `health_tips`
  MODIFY `tips_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
