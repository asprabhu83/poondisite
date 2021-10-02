-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 09:15 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academic`
--

-- --------------------------------------------------------

--
-- Table structure for table `planner`
--

CREATE TABLE `planner` (
  `name` varchar(30) NOT NULL,
  `email` varchar(150) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `shift` varchar(30) NOT NULL,
  `academic_year` int(10) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `year` tinyint(4) NOT NULL,
  `programme` varchar(30) NOT NULL,
  `class` varchar(150) NOT NULL,
  `cycle_no` int(30) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `hour` tinyint(4) NOT NULL,
  `unit` tinyint(4) NOT NULL,
  `title` varchar(100) NOT NULL,
  `portion_covered` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `planner`
--

INSERT INTO `planner` (`name`, `email`, `designation`, `department`, `shift`, `academic_year`, `semester`, `year`, `programme`, `class`, `cycle_no`, `subject_code`, `hour`, `unit`, `title`, `portion_covered`) VALUES
('ArulDeva', 'aruldeva.ad@gmail.com', 'assistant_professor', 'computer_application', 'day', 2122, 'odd', 1, 'mca', 'computer_application', 9, '14lmb411', 3, 3, 'calab', 'yescoverd'),
('Sathish', 'aruldeva.ad@gmail.com', 'assistant_professor', 'computer_application', 'day', 2122, 'even', 2, 'mca', 'computer_application', 7, '14lmb411', 3, 3, 'calab', 'coverd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
