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
-- Table structure for table `googlockusers`
--

CREATE TABLE IF NOT EXISTS `googlockusers` (
  `username` varchar(50) NOT NULL,
  `timed` bigint(20) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL,
  `completed` int(11) NOT NULL DEFAULT '0',
  `score` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `googlockusers`
--

INSERT INTO `googlockusers` (`username`, `timed`, `password`, `completed`, `score`) VALUES
('superuser', 0, '0baea2f0ae20150db78f58cddac442a9', 0, 0),
('c65', 0, 'cf30c5a9bfb152765dae97cee99689f8', 0, 0),
('abcd', 0, '240bc306d1a19916d636f3d614e03024', 0, 0),
('Remember the Milk', 1329325100, '202cb962ac59075b964b07152d234b70', 0, 0),
('team moriarty', 1329324479, '7ebd2b761cc689cc556cbb80af2bceda', 0, 0),
('coordinators2', 0, '8dd6ac1bca081e7329dcff208cfe28fb', 0, 0),
('kaushalv27', 1329325882, 'f573d58b8de1ce623b14b7569a96424c', 0, 0),
('a45', 0, '306754ce45dc3a2441a1828dcf3fe238', 0, 0),
('b45', 0, '48044979623ab599d9557300637aa49b', 0, 0),
('swena', 1348074641, '2d488a349a85cb8e9c6c0a0888fd4e06', 1, 10),
('coordinators', 0, '8dd6ac1bca081e7329dcff208cfe28fb', 15, 0),
('TheCerealKillers', 1329326064, '883d04d700fdc250a4c6a0332598faad', 0, 0),
('Prodigals', 1329324372, '7fb92f35601ab0b1c88b51d9beef53b9', 0, 0),
('times of da', 1329324654, '202cb962ac59075b964b07152d234b70', 0, 0),
('blah', 1329324373, '55ca49079f13284958f165aee3912c81', 0, 0),
('OLD MONKS', 1329325734, '0062d21c1a97acad0fff653df56849b2', 0, 0),
('d65', 1329324365, 'a14d6779bced4e2ed4971d7556a0da06', 0, 0),
('swena1', 0, '2d488a349a85cb8e9c6c0a0888fd4e06', 0, 0),
('hey', 0, '2d488a349a85cb8e9c6c0a0888fd4e06', 0, 0),
('jiya', 0, '2d488a349a85cb8e9c6c0a0888fd4e06', 0, 0),
('j201', 0, '2d488a349a85cb8e9c6c0a0888fd4e06', 0, 0),
('hum', 0, '03c7c0ace395d80182db07ae2c30f034', 0, 0),
('jaaaaadooooo', 1348575769, '03c7c0ace395d80182db07ae2c30f034', 20, 30),
('hay', 0, '03c7c0ace395d80182db07ae2c30f034', 0, 0),
('ifest', 0, '03c7c0ace395d80182db07ae2c30f034', 0, 0),
('rampyaari', 0, '03c7c0ace395d80182db07ae2c30f034', 0, 0),
('ramu', 0, '03c7c0ace395d80182db07ae2c30f034', 0, 0),
('yahoooooooo', 0, '03c7c0ace395d80182db07ae2c30f034', 1, 0);
