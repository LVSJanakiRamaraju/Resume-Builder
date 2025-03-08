-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2014 at 12:03 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `resumebuilder`
--

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE IF NOT EXISTS `resume` (
  `roll` varchar(12) NOT NULL,
  `fullname` text NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `website` varchar(150) DEFAULT NULL,
  `linkedin` varchar(150) DEFAULT NULL,
  `github` varchar(150) DEFAULT NULL,
  `hno` text,
  `street` longtext NOT NULL,
  `city` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `country` text NOT NULL,
  `pin` int(6) NOT NULL,
  `careerobjective` longtext NOT NULL,
  `sem1` int(10) NOT NULL,
  `sem2` int(10) NOT NULL,
  `sem3` int(10) NOT NULL,
  `sem4` int(10) NOT NULL,
  `sem5` int(10) NOT NULL,
  `sem6` int(10) NOT NULL,
  `sem7` int(10) NOT NULL,
  `sem8` int(10) NOT NULL,
  `betotal` float NOT NULL,
  `beyear` int(4) NOT NULL,
  `becollege` longtext NOT NULL,
  `preuniversitymarks` float NOT NULL,
  `pucollege` longtext NOT NULL,
  `puuniversity` longtext NOT NULL,
  `puyear` int(4) NOT NULL,
  `sslcmarks` float NOT NULL,
  `school` longtext NOT NULL,
  `schoolboard` longtext NOT NULL,
  `sslcyear` int(4) NOT NULL,
  `project1` longtext,
  `project1abstract` longtext,
  `project2` longtext,
  `project2abstract` longtext,
  `project3` longtext,
  `project3abstract` longtext,
  `project4` longtext,
  `project4abstract` longtext,
  `programming` longtext,
  `web` longtext,
  `tools` longtext,
  `os` longtext,
  `extra1` longtext,
  `extra2` longtext,
  `extra3` longtext,
  `fathersname` text NOT NULL,
  `mothersname` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dd` int(2) NOT NULL,
  `mm` int(2) NOT NULL,
  `yyyy` int(4) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `maritalstatus` varchar(50) NOT NULL,
  `languagesknown` longtext NOT NULL,
  `declaration` varchar(1500) NOT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
