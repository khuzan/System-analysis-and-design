-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2016 at 04:13 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scheduling_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `month` varchar(50) NOT NULL,
  `taym` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `room` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `students` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `month`, `taym`, `subject`, `day`, `course`, `room`, `lname`, `students`) VALUES
(43, 'March', '5:00 PM', 'CpE410', 'Monday', 'ENGR', 'C64', 'Acedilla', 18),
(44, 'February', '4:30 PM', 'EE50', 'Tuesday', 'ENGR', 'C62', 'Estandart', 18),
(45, 'February', '5:00 PM', 'EE50', 'Monday', 'ENGR', 'C64', 'Olmedo', 22),
(48, 'March', '4:30 PM', 'ECE420', 'Tuesday', 'ENGR', 'C64', 'Evangelio', 0),
(49, 'March', '4:30 PM', 'CpE401', 'Sunday', 'BSIT', 'C64', 'Acedilla', 0),
(50, 'March', '4:00 PM', 'ECE420', 'Tuesday', 'BSIT', 'C64', 'Olmedo', 0),
(51, 'April', '12:30 NN', 'CpE401', 'Monday', 'ENGR', 'C65', 'Acedilla', 0),
(52, 'April', '4:30 PM', 'ECE310', 'Tuesday', 'ENGR', 'C65', 'Evangelio', 0),
(53, 'April', '4:30 PM', 'ECE310', 'Tuesday', 'ENGR', 'C65', 'Evangelio', 0),
(54, 'April', '4:30 PM', 'ECE310', 'Tuesday', 'ENGR', 'C65', 'Evangelio', 0),
(55, 'April', '4:30 PM', 'ECE310', 'Tuesday', 'BSIT', 'C65', 'Evangelio', 18),
(56, 'April', '4:30 PM', 'ECE310', 'Tuesday', 'ENGR', 'C65', 'Evangelio', 9),
(57, 'March', '4:30 PM', 'ECE420', 'Monday', 'ENGR', 'C64', 'Evangelio', 18);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
