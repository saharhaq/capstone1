-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 01, 2013 at 07:30 PM
-- Server version: 5.5.29
-- PHP Version: 5.3.10-1ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `NursingHours`
--
CREATE DATABASE `NursingHours` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `NursingHours`;

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE IF NOT EXISTS `Admin` (
  `ProfessorID` varchar(25) NOT NULL,
  `Firstname` varchar(25) NOT NULL,
  `Lastname` varchar(25) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`ProfessorID`, `Firstname`, `Lastname`, `Username`, `Password`) VALUES
('31415926', 'root', 'user', 'sandy', '$6$RoObpEdS$5rzUZTuLoVd2FHXuOwXRGr/G.3OWXHix7WSi3NdAjFAZsp54iTEbmikRdNKH7H9N1RQQyr1zR0JrBaD.XVCIO/'),
('1007', '1', '1', 'chriswi', '$6$nnX72eeE$95jzV5GJiifj3VgVWTHSnDeOd3AOjuMAw5EMRFCL2PYeqRwme3zePesQw29/1Z7NnC7hbZT3wBug2xLIqGs4E0'),
('1', '1', '1', '', ''),
('741', 'test', 'admin', 'otherProf', '$6$y9ni2DYB$yARxt7DIq1qKR905oM5rLMhjdxK6Ve8e/t3ULt9H8NgZ38abSFYK9V6lYAZReoZ2KUXE4ZM23VMnuH7u2dOGT0'),
('123', 'Sahar', 'Haque', '', '$6$glKJ5q5X$DFgx6VsWS9rBm3979cg4fyix/kQj.8B3396KmvolEU4/WrJG8QPOyWoYQcRcF3FhxmTYqW3QYHA5E.6wk7aht1');

-- --------------------------------------------------------

--
-- Table structure for table `Hours`
--

CREATE TABLE IF NOT EXISTS `Hours` (
  `id` varchar(255) NOT NULL,
  `StudentID` varchar(12) NOT NULL,
  `Hours` int(11) NOT NULL,
  `Activity` varchar(200) NOT NULL,
  `Description` varchar(1500) NOT NULL,
  `Approval` varchar(20) NOT NULL DEFAULT 'Pending',
  `Class code` varchar(10) NOT NULL,
  `Entrytime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Hours`
--

INSERT INTO `Hours` (`id`, `StudentID`, `Hours`, `Activity`, `Description`, `Approval`, `Class code`, `Entrytime`) VALUES
('519eb81cc2bda2.25237079', '123', 1, '', '1500 Character limit\r\n\r\n', 'Pending', 'NUR3069L', '2013-05-30 00:11:46'),
('51a6a387c4ce40.50360403', '786', 10, '', '1500 Character limit\r\n\r\n', 'Pending', 'NUR3069L', '2013-05-30 00:55:35');

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

CREATE TABLE IF NOT EXISTS `Students` (
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `StudentID` varchar(10) NOT NULL DEFAULT '',
  `courseReference` varchar(8) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`StudentID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Students`
--

INSERT INTO `Students` (`first_name`, `last_name`, `StudentID`, `courseReference`, `password`, `username`) VALUES
('Christopher', 'Wiggins', '007', '2323', '$6$nxxzz4rA$VylLBA1SIb.MfMQ71flS5brFjU4ILFVviFdlLKgObBSzY2U.Ayu/rDY.Jop1rfS/SGo511tz2fw36B8rLoAUQ/', 'chriswi'),
('sad', 'panda', '123', '2323', '$6$3/OmhMQa$beZOQj3zdxhJxAG.JHkOeQN7oE72pA6e.tPzuLSqGQZRo49/JKkY3vU19rHX2Q1uGlC5exJpad572VvqMSygf1', 'sadness'),
('teststudent', 'Lname', '654', '2323', '$6$ufp6Q2i7$To0wP.wMbCOaslxb6xwfN.8IlSJnyKUo/b6Kzu8g6jQrumBp8XXJg0LjLa//Ju1iHVoJj96ggUmORpneBGegZ1', NULL),
('Sahar', 'Haque', '786', '2323', '$6$tIXc7OHw$xbY6RyxKiJPsST.kn57jp33xw4NM7bH/PWPm4PV1QiKiw6iLs0WiLiLIfvFL92JHyMdnhIfcJSOe6I/du7DuP0', 'sahar'),
('silly', 'rabbit', '789', '852', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` varchar(255) NOT NULL,
  `studentid` varchar(9) NOT NULL,
  `path` varchar(200) NOT NULL,
  `Class code` varchar(10) NOT NULL,
  `Time submission` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `studentid`, `path`, `Class code`, `Time submission`) VALUES
('519eaaa1af2095.39231315', '123', 'uploads/123/hello.docx', 'NUR3069L', '2013-05-23 23:47:45');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
