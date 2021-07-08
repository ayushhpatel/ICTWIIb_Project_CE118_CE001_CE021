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
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(255) NOT NULL,
  `SrNo` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `MobileNo` varchar(255) NOT NULL,
  `ProfileFor` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Height` varchar(255) NOT NULL,
  `MaritalStatus` varchar(255) NOT NULL,
  `MotherTongue` varchar(255) NOT NULL,
  `Religion` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `Age` varchar(255) NOT NULL,
  `Education` varchar(255) NOT NULL,
  `workas` varchar(255) NOT NULL,
  `Income` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `SrNo`, `Username`, `MobileNo`, `ProfileFor`, `Gender`, `Height`, `MaritalStatus`, `MotherTongue`, `Religion`, `Country`, `dob`, `Age`, `Education`, `workas`, `Income`, `about`, `photo`) VALUES
(16, '38', 'JEET', '9033958003', 'Self', 'male', '', 'Never Married', 'Hindi', 'Hindu', 'India', '1999-01-07', '22', 'BE/B-TECH<', 'Defence Service', '1 to 2 Lakh', 'hii', 'photos/images.jpg'),
(17, '39', 'Skylord', '9033958003', 'Self', 'male', '', 'Never Married', 'Hindi', 'Hindu', 'India', '1998-01-02', '23', 'BE/B-TECH<', 'Government Sector', '4 to 10 Lakh', 'hiii', 'photos/SKYLORD.jpg'),
(18, '40', 'ROHIT', '9033958003', 'Self', 'male', '', 'Never Married', 'Punjabi', 'Hindu', 'India', '1997-01-10', '24', 'Bcom', 'Private Company', '10 to 30 Lakh', 'hello', 'photos/Rohit.jpg'),
(19, '41', 'Riya', '9033958003', 'Self', 'female', '', 'Never Married', 'Punjabi', 'Muslim', 'India', '1999-05-13', '22', 'Mcom', 'Private Company', '1 to 2 Lakh', 'nice', 'photos/girl.jpg'),
(20, '42', 'Raj', '9033958003', 'Self', 'male', '', 'Never Married', 'Punjabi', 'Hindu', 'India', '1997-10-09', '23', 'CFA', 'Government Sector', '4 to 10 Lakh', 'hiii', 'photos/IMG_2564 small.jpg'),
(21, '43', 'Priya', '8155902190', 'Self', 'female', '', 'Never Married', 'Gujarati', 'Hindu', 'India', '1999-10-14', '21', 'Bcom', 'Private Company', '2 to 4 Lakh', 'Hello', 'photos/girl.jpg'),
(22, '45', 'john', '9033958003', 'Self', 'male', '', 'Divorced', 'Hindi', 'Hindu', 'India', '1998-02-04', '23', 'Bcom', 'Private Company', '2 to 4 Lakh', 'hiiii', 'photos/Rohit.jpg'),
(23, '46', 'JAY', '9033958003', 'Self', 'male', '', 'Never Married', 'Hindi', 'Hindu', 'India', '1998-01-02', '23', 'BE/B-TECH<', 'Government Sector', '2 to 4 Lakh', 'Hiii', 'photos/Rohit.jpg'),
(24, '47', 'Shraddha', '8155902190', 'Self', 'female', '', 'Never Married', 'Hindi', 'Hindu', 'India', '1997-01-02', '24', 'Bcom', 'Private Company', '2 to 4 Lakh', 'Hi My Name is Shraddha and I am looking for a person', 'photos/GirlPhoto.jpg'),
(25, '49', 'SMITH', '9033958003', 'Self', 'male', '', 'Never Married', 'Hindi', 'Hindu', 'India', '1997-01-02', '24', 'BE/B-TECH<', 'Private Company', '2 to 4 Lakh', 'HII', 'photos/images.jpg'),
(26, '51', 'DEV', '9033958003', 'Self', 'male', '', 'Never Married', 'Hindi', 'Hindu', 'India', '1996-02-02', '25', 'BE/B-TECH<', 'Private Company', '2 to 4 Lakh', 'HI', 'photos/images.jpg'),
(27, '52', 'Devam', '9033958003', 'Self', 'male', '', 'Never Married', 'Hindi', 'Hindu', 'India', '1998-01-08', '23', 'BE/B-TECH<', 'Private Company', '4 to 10 Lakh', 'HELLO', 'photos/images.jpg'),
(28, '53', 'PRINCE', '9033958003', 'Self', 'male', '', 'Never Married', 'Hindi', 'Hindu', 'India', '1997-02-02', '24', 'ME/M.TECH', 'Private Company', '4 to 10 Lakh', 'HIIII', 'photos/images.jpg'),
(29, '55', 'PRIYANKA', '8155902190', 'Self', 'female', '', 'Never Married', 'Hindi', 'Hindu', 'India', '1997-02-04', '24', 'BE/B-TECH<', 'Private Company', '2 to 4 Lakh', 'HIII', 'photos/GirlPhoto.jpg'),
(30, '56', 'YASH', '9033958003', 'Self', 'male', '', 'Never Married', 'Hindi', 'Hindu', 'India', '1996-05-08', '25', 'BE/B-TECH<', 'Government Sector', '4 to 10 Lakh', 'HIII', 'photos/images.jpg'),
(32, '57', 'Urvashi', '9033958003', 'Self', 'female', '', 'Never Married', 'Hindi', 'Hindu', 'India', '1996-02-08', '25', 'AE', 'Government Sector', 'Upto 1 lakh', 'hiii', 'photos/GirlPhoto.jpg'),
(33, '58', 'PARTH', '8155902190', 'Self', 'male', '', 'Never Married', 'Hindi', 'Hindu', 'India', '1997-01-30', '24', 'ME/M.TECH', 'Private Company', '2 to 4 Lakh', 'HIII', 'photos/images.jpg'),
(34, '59', 'vivek', '8155902190', 'Self', 'male', '', 'Never Married', 'Hindi', 'Hindu', 'India', '1997-01-15', '24', 'MsEng', 'Private Company', '2 to 4 Lakh', 'hiii', 'photos/images.jpg'),
(35, '60', 'RADHIKA', '9033958003', 'Self', 'female', '', 'Never Married', 'Hindi', '', 'India', '1999-02-04', '22', 'MsEng', 'Private Company', '2 to 4 Lakh', 'HII', 'photos/GirlPhoto.jpg'),
(36, '61', 'ROCKY', '8155902190', 'Self', 'male', '', 'Never Married', 'Hindi', 'Hindu', 'India', '1997-06-04', '24', 'BE/B-TECH<', 'Private Company', '4 to 10 Lakh', 'HIII', 'photos/images.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
