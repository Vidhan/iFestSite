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
-- Table structure for table `googlockquestions`
--

CREATE TABLE IF NOT EXISTS `googlockquestions` (
  `no` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `googlockquestions`
--

INSERT INTO `googlockquestions` (`no`, `question`, `answer`) VALUES
(15, '', 'cancer;'),
(14, '', '71songs;seventyonesongs;seventyonesong;71song;'),
(12, '', 'regis;regisphilbin;'),
(13, '', 'aryanpapers;'),
(10, '', 'americageorginaferrara;americaferrara;uglybetty;'),
(11, '', ' baichungbhutia;'),
(9, '', 'michaelphelps;michaelfredphelps;'),
(7, '', 'wimbledon;wimbledontournament;wimbledonopen;'),
(8, '', 'googlockholmes;'),
(6, '', 'chrysler;chryslergroup;chryslercorporation;chryslercorp;daimlerchrysler;daimlerchryslerag;'),
(4, '', 'splinter;'),
(5, '', 'jonathannivenjoncryer;joncryer;'),
(3, '', 'android;'),
(1, '', 'tata;tatagroup;'),
(2, '', 'henryford;');
