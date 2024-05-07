 phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 07, 2024 at 10:30 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_finalcsc443`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `COURSENAME` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `DESCRIPTION` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `IS_ACTIVE` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_contacts`
--

DROP TABLE IF EXISTS `table_contacts`;
CREATE TABLE IF NOT EXISTS `table_contacts` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `PHONE` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `EMAIL` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `SUBJECT` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `BODY` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `PASSWORD` varchar(350) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`ID`, `USERNAME`, `PASSWORD`) VALUES
(1, 'admin', 'password'),
(2, 'tester', 'pass');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
