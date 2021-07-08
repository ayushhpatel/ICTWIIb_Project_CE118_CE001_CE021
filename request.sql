-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 05:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrimonial website`
--

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `RequestTo` varchar(255) NOT NULL,
  `RequestFrom` varchar(255) NOT NULL,
  `Result` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`RequestTo`, `RequestFrom`, `Result`) VALUES
('Skylord', 'JEET', ''),
('Riya', 'ROHIT', ''),
('Riya', 'ROHIT', ''),
('Priya', 'Raj', ''),
('Riya', 'ROHIT', ''),
('Riya', 'JAY', ''),
('Shraddha', '', ''),
('Shraddha', '', ''),
('PRIYANKA', '', ''),
('PRIYANKA', '', ''),
('PRIYANKA', 'YASH', ''),
('YASH', 'PRIYANKA', ''),
('PRIYANKA', 'YASH', ''),
('YASH', 'PRIYANKA', ''),
('Urvashi', 'PARTH', ''),
('Urvashi', 'vivek', ''),
('RADHIKA', 'ROCKY', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
