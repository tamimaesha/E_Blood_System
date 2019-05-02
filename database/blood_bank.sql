-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2016 at 05:06 AM
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
  `mob_num` int(10) NOT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donor_reg`
--

INSERT INTO `donor_reg` (`user_id`, `name`, `password`, `email`, `age`, `gender`, `blood_group`, `district`, `last_date`, `mob_num`, `address`) VALUES
(2, 'foujia', '12345678', 'nahian@gmail.com', 29, 'Female', 'B+', 'Chittagong', '2015-12-11', 2147483647, 'Patherghata'),
(3, 'foujia', '12345678', 'nahiangg@gmail.com', 29, 'Female', 'B+', 'Chittagong', '2015-12-11', 2147483647, 'Patherghata'),
(10, 'Dia', '12345', 'd@gmail.com', 21, 'Female', 'A+', 'Dhaka', '2015-03-12', 2147483647, 'Gulshan');

-- --------------------------------------------------------

--
-- Table structure for table `patient_reg`
--

CREATE TABLE IF NOT EXISTS `patient_reg` (
  `user_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `amount` int(3) NOT NULL,
  `needed_date` date NOT NULL,
  `district` varchar(15) NOT NULL,
  `mob_num` int(3) NOT NULL,
  `hospital` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient_reg`
--

INSERT INTO `patient_reg` (`user_id`, `name`, `password`, `email`, `blood_group`, `amount`, `needed_date`, `district`, `mob_num`, `hospital`) VALUES
(1, 'Suma', '123456', 'niha@gmail.com', 'AB+', 2, '2016-03-03', 'Dhaka', 880, 'apollo hospital, dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor_reg`
--
ALTER TABLE `donor_reg`
  ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `patient_reg`
--
ALTER TABLE `patient_reg`
  ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor_reg`
--
ALTER TABLE `donor_reg`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `patient_reg`
--
ALTER TABLE `patient_reg`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
