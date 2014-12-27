-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 26, 2014 at 01:07 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ftfl`
--

-- --------------------------------------------------------

--
-- Table structure for table `traininginfo`
--

CREATE TABLE IF NOT EXISTS `traininginfo` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `training` varchar(30) NOT NULL,
  `description` varchar(40) NOT NULL,
  `institute` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `t_year` varchar(40) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `start` varchar(60) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `course` varchar(40) NOT NULL,
  `trainer` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
