-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2017 at 10:14 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `samanfyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE IF NOT EXISTS `denda` (
  `kenderaan_ID` varchar(15) NOT NULL,
  `saman_ID` int(10) NOT NULL,
  `tarikh` date NOT NULL,
  `staffID` varchar(15) NOT NULL,
  PRIMARY KEY (`kenderaan_ID`,`saman_ID`,`tarikh`),
  KEY `student_ID` (`kenderaan_ID`,`saman_ID`,`tarikh`),
  KEY `student_ID_2` (`kenderaan_ID`),
  KEY `student_ID_3` (`kenderaan_ID`,`saman_ID`,`tarikh`),
  KEY `staffID` (`staffID`),
  KEY `denda_ibfk_5` (`saman_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `denda`
--

INSERT INTO `denda` (`kenderaan_ID`, `saman_ID`, `tarikh`, `staffID`) VALUES
('AFV537', 3, '2017-07-14', '1'),
('AFV537', 1, '2017-07-29', '2');

-- --------------------------------------------------------

--
-- Table structure for table `kenderaan`
--

CREATE TABLE IF NOT EXISTS `kenderaan` (
  `kenderaan_ID` varchar(15) NOT NULL,
  `student_ID` varchar(15) NOT NULL,
  `kenderaan_jenis` varchar(50) NOT NULL,
  PRIMARY KEY (`kenderaan_ID`),
  KEY `student_ID` (`student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kenderaan`
--

INSERT INTO `kenderaan` (`kenderaan_ID`, `student_ID`, `kenderaan_jenis`) VALUES
('AFV537', '37480', 'kereta');

-- --------------------------------------------------------

--
-- Table structure for table `saman`
--

CREATE TABLE IF NOT EXISTS `saman` (
  `saman_id` int(10) NOT NULL AUTO_INCREMENT,
  `saman_name` varchar(100) NOT NULL,
  `saman_price` varchar(10) NOT NULL,
  PRIMARY KEY (`saman_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `saman`
--

INSERT INTO `saman` (`saman_id`, `saman_name`, `saman_price`) VALUES
(1, 'bawa kaju', 'qwe'),
(3, 'x pakai helmets', 'qw');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_ID` varchar(15) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `userType` varchar(15) NOT NULL,
  PRIMARY KEY (`staff_ID`),
  KEY `guard_ID` (`staff_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_ID`, `staff_name`, `password`, `userType`) VALUES
('1', 'safuan', '1', 'admin'),
('2', 'amirul', '1', 'guard');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_ID` varchar(20) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `student_course` varchar(20) NOT NULL,
  `student_sem` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`student_ID`),
  KEY `student_ID` (`student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_ID`, `student_name`, `student_course`, `student_sem`, `password`) VALUES
('37480', 'MUHD SAFUAN BIN MOHD YUSOFF', 'ISMSK PP', '6', '1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `denda`
--
ALTER TABLE `denda`
  ADD CONSTRAINT `denda_ibfk_7` FOREIGN KEY (`staffID`) REFERENCES `staff` (`staff_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `denda_ibfk_5` FOREIGN KEY (`saman_ID`) REFERENCES `saman` (`saman_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `denda_ibfk_8` FOREIGN KEY (`kenderaan_ID`) REFERENCES `kenderaan` (`kenderaan_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kenderaan`
--
ALTER TABLE `kenderaan`
  ADD CONSTRAINT `kenderaan_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `student` (`student_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
