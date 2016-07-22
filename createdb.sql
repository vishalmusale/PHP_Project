-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2014 at 02:02 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
`id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'vishal', 'musale', '09876', 'asdf'),
(2, 'sairam', 'patanahi', 'sairam', 'sairam'),
(3, 'sanket', 'shinde', 'sanket', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
`id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `stud_id` int(10) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `speciality` varchar(50) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `campaign` varchar(100) NOT NULL,
  `actions` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `stud_id`, `email`, `reason`, `speciality`, `date`, `time`, `campaign`, `actions`) VALUES
(1, 'pranit', 12365487, 'vishal.m.musale@gmail.com', 'nothing', 'nothing', '2014-12-15', '15:00:00', 'blood donation', ''),
(3, 'sachin', 32145678, 'chavan.sachin@gmail.com', 'nothing', 'nothing', '2015-12-31', '14:00:00', '', ''),
(4, 'varun', 14785236, 'varun.kadkol@gmail.com', 'nothing', 'nothing', '2014-12-17', '10:00:00', 'blood donation', ''),
(5, 'manjit', 25874102, 'manjit.patankar@gmail.com', 'nothing', 'nothing', '2014-12-17', '11:00:00', 'blood donation', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE IF NOT EXISTS `campaign` (
`id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `address1` varchar(128) NOT NULL,
  `city` varchar(24) NOT NULL,
  `state` varchar(24) NOT NULL,
  `zip` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id`, `name`, `date`, `time`, `address1`, `city`, `state`, `zip`) VALUES
(1, 'Blood Donation', '2014-12-31', '07:00:00', '1250 Bellflower Blvd', 'Long Beach', 'CA', 90815),
(2, 'medical Checkup', '2014-12-31', '07:00:00', '1250 Bellflower Blvd', 'Long Beach', 'CA', 90815);

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE IF NOT EXISTS `student_login` (
`id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `campus_id` varchar(9) NOT NULL,
  `email` varchar(128) NOT NULL,
  `addr1` varchar(64) NOT NULL,
  `city` varchar(24) NOT NULL,
  `state` varchar(24) NOT NULL,
  `zip` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`id`, `firstname`, `lastname`, `campus_id`, `email`, `addr1`, `city`, `state`, `zip`, `username`, `password`) VALUES
(1, 'vishal', 'musale', '0', '', '', '', '', 0, '12345', '12345'),
(4, 'sachin', 'chawan', '032145678', 'chavan.sachin@gmail.com', '2000 Park Ave Apt 1', 'Long Beach', 'CA', 90815, 'sachin', 'sachin'),
(5, 'varun', 'kadkol', '014785236', 'varun.kadkol@gmail.com', '4966 Los Coyotes Diagonal', 'Long Beach', 'CA', 90815, 'varun', '12345'),
(6, 'manjit', 'patankar', '025874102', 'manjit.patankar@gmail.com', '908 rose ave', 'los angeles', 'CA', 91548, 'manjit', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
 ADD PRIMARY KEY (`id`,`stud_id`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
 ADD PRIMARY KEY (`id`,`campus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `student_login`
--
ALTER TABLE `student_login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
