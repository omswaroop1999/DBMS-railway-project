-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 02, 2018 at 08:11 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railway`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(30) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `fed` varchar(100) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

DROP TABLE IF EXISTS `reserve`;
CREATE TABLE IF NOT EXISTS `reserve` (
  `pnr` varchar(20) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `seatno` int(11) DEFAULT NULL,
  `rstatus` int(11) DEFAULT NULL,
  `bdate` date DEFAULT NULL,
  `trainid` int(11) DEFAULT NULL,
  `pname` varchar(20) NOT NULL,
  PRIMARY KEY (`pnr`),
  KEY `trainid` (`trainid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`pnr`, `uid`, `seatno`, `rstatus`, `bdate`, `trainid`, `pname`) VALUES
('pnr0034', 47, 5, 1, '2018-10-04', 18654, 'aadi'),
('pnr0035', 47, 6, 1, '2018-10-04', 18645, 'selfie'),
('pnr0036', 22, 1, 1, '2018-10-04', 22849, 'ram');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

DROP TABLE IF EXISTS `route`;
CREATE TABLE IF NOT EXISTS `route` (
  `trainid` int(11) NOT NULL,
  `stopno` int(11) NOT NULL,
  `stid` int(11) DEFAULT NULL,
  `atime` time DEFAULT NULL,
  `dtime` time DEFAULT NULL,
  PRIMARY KEY (`trainid`,`stopno`),
  KEY `stid` (`stid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`trainid`, `stopno`, `stid`, `atime`, `dtime`) VALUES
(18645, 1, 6342, '08:05:00', '08:15:00'),
(18645, 2, 1342, '08:05:00', '10:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

DROP TABLE IF EXISTS `stations`;
CREATE TABLE IF NOT EXISTS `stations` (
  `stid` int(11) NOT NULL,
  `stname` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`stid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`stid`, `stname`) VALUES
(1342, 'vizag'),
(6342, 'bez'),
(6752, 'hyd'),
(7752, 'bsa'),
(7842, 'hsp'),
(7895, 'bro'),
(8523, 'dssa'),
(78, 'dev');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

DROP TABLE IF EXISTS `train`;
CREATE TABLE IF NOT EXISTS `train` (
  `trainid` int(11) NOT NULL,
  `tname` varchar(30) DEFAULT NULL,
  `ttype` varchar(20) DEFAULT NULL,
  `sourceid` int(11) DEFAULT NULL,
  `destid` int(11) DEFAULT NULL,
  `seats` int(11) DEFAULT NULL,
  `fare` int(11) DEFAULT NULL,
  `availdate` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`trainid`),
  KEY `sourceid` (`sourceid`),
  KEY `destid` (`destid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`trainid`, `tname`, `ttype`, `sourceid`, `destid`, `seats`, `fare`, `availdate`) VALUES
(18645, 'east cost', 'mail', 6342, 6752, 10, 449, 'every day'),
(22849, 'shalimar sec', 'super fast', 6342, 1342, 10, 750, 'wed'),
(15566, 'fast express', 'ac', 7895, 7895, 20, 670, 'every day');

-- --------------------------------------------------------

--
-- Table structure for table `trainstatus`
--

DROP TABLE IF EXISTS `trainstatus`;
CREATE TABLE IF NOT EXISTS `trainstatus` (
  `trainid` int(11) NOT NULL,
  `availdate` date NOT NULL,
  `bseats` int(11) DEFAULT NULL,
  `aseats` int(11) DEFAULT NULL,
  `wseats` int(11) DEFAULT NULL,
  PRIMARY KEY (`trainid`,`availdate`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainstatus`
--

INSERT INTO `trainstatus` (`trainid`, `availdate`, `bseats`, `aseats`, `wseats`) VALUES
(18645, '2018-10-04', 2, 8, 0),
(22849, '2018-10-03', 1, 9, 0),
(15566, '2018-10-12', 15, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(20) NOT NULL,
  `uid` int(11) NOT NULL,
  `passwd` varchar(15) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `sque` varchar(20) NOT NULL,
  `sans` varchar(20) NOT NULL,
  PRIMARY KEY (`uid`,`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `uid`, `passwd`, `age`, `gender`, `phno`, `city`, `state`, `sque`, `sans`) VALUES
('ashish@gmail.com', 8, '1234', 18, 'male', '9182843530', 'vsp', 'ap', 'petname', 'sweety'),
('biswanth', 20, '654321', 18, 'male', '741852963', 'vsp', 'ap', 'favbike', 'ktm'),
('sukesh@gmail.com', 22, '4321', 18, 'male', '8985948208', 'vsp', 'ap', 'favdrink', 'cola'),
('swaroop@gmail.ccom', 47, '123456789', 18, 'male', '7893306402', 'vsp', 'ap', 'favschool', 'sfs'),
('sir@gmail.com', 7, 'hod', 45, 'male', '789456321', 'vsp', 'ap', 'favsub', 'dbms'),
('devil@gmail.com', 999, 'james123', 23, 'male', '852963741', 'kakinada', 'ap', 'favdog', 'lab'),
('prabal@gmail.com', 34, '1234', 20, 'male', '7416774740', 'RAJAM', 'ap', 'favsir', 'ram'),
('cheapystore5@hi2.in', 99, '9999', 99, 'm', '7788994455', 'bombay', 'maharastra', 'favcar', 'amg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
