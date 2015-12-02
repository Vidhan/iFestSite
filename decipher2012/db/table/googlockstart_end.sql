-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2012 at 10:23 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `goolockquestions`
--

-- --------------------------------------------------------

--
-- Table structure for table `googlockstart_end`
--

CREATE TABLE IF NOT EXISTS `googlockstart_end` (
  `no` int(11) NOT NULL,
  `start_timestamp` varchar(20) NOT NULL,
  `finish_timestamp` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `googlockstart_end`
--

INSERT INTO `googlockstart_end` (`no`, `start_timestamp`, `finish_timestamp`) VALUES
(0, '1348592100', '1348594200');
