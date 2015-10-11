-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2015 at 10:21 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `huehuehue`
--
CREATE DATABASE IF NOT EXISTS `huehuehue` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `huehuehue`;

-- --------------------------------------------------------

--
-- Table structure for table `secur`
--

CREATE TABLE IF NOT EXISTS `secur` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `First` varchar(50) NOT NULL,
  `Middle` varchar(50) NOT NULL,
  `Last` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secur`
--

INSERT INTO `secur` (`Username`, `Password`, `First`, `Middle`, `Last`) VALUES
('John', '123', '', '', ''),
('qwe', 'qwe', 'qwe', 'qwe', 'qwe');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
