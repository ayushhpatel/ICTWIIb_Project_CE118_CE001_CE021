-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 05:18 PM
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
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `Sr.No` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`Sr.No`, `Username`, `Password`, `email`) VALUES
(33, 'DAKSHAY', '$2y$10$2Cedivd.rLV8vl6cgohz7OHQNs27k/UgtYXcvTOle0.VpIth2o6QG', 'dakshaysolanki@gmail.com'),
(34, 'DKING', '$2y$10$qimpfgzh69rVX/iyOVGhc.iGkv2A/z4wTs2miz6apIN7j/qk0Zu2y', 'bharatsolanki165@gmail.com'),
(35, 'Shyamal', '$2y$10$BKjEyYctKEsMW6LIW7HUNO6AtXiW8jDf0Ufs26.DNluQXymj4VDzu', 'dakshaysolanki@gmail.com'),
(36, 'Kriti', '$2y$10$lH/U1xPlFn3pPX3k/nnzZOtGDXUkw9v0QWCTI1uGyi5Xc5J.ePMQm', '20ceubg067@ddu.ac.in'),
(37, 'ankit', '$2y$10$5JtrJrLcgli04I9dWCfI3OktHaivGnUFmoDwupaDhWAgZi7TkjfB6', '20ceubg067@ddu.ac.in'),
(38, 'JEET', '$2y$10$yySAF77b3W.poOfIjC6r7.Y/zR5FX5qbIJTYU0eACCjMRjHTqHFgW', '20ceubg067@ddu.ac.in'),
(39, 'Skylord', '$2y$10$7i3vL7vtFhRBGJYDDZkc4e44ym1byAkmTXEw51Zyngt9DfV3NKUg6', '20ceubg067@ddu.ac.in'),
(40, 'ROHIT', '$2y$10$NPqbxOKWNUQhjSx3fWpfSedH1NzEPALwOtUMqqGU/PBtgkmxWQxDW', 'dakshaysolanki@gmail.com'),
(41, 'Riya', '$2y$10$ey1IAJ5EdXeHkpd6qH4A7OdO0Ac4KjAbdThC.ggRq8Vb9G6NyMPG6', '20ceubg067@ddu.ac.in'),
(42, 'Raj', '$2y$10$GbNv9dGlqE1ZT2Y.gJglc.L6KqB5LtcZKTbgHfeUIxvpQayru3lD.', 'bharatsolanki165@gmail.com'),
(43, 'Priya', '$2y$10$Zw9j1LSLhQ3aqNCUluKMUuQjsjA2vEBAFYjUVPF.rhGwWLIcAQZQa', 'dakshaysolanki@gmail.com'),
(44, 'Himanshu', '$2y$10$yb2y4rSr0rRbzgUUIEsmV.EvN44j4YmJ.vGhue1srDejFXn/Xqn3W', 'dakshaysolanki@gmail.com'),
(45, 'john', '$2y$10$MN0nlllxGhelca.kArEpM.V7pV0Zd7m2kgCvA4r.g14DV2QNYGmxS', 'bharatsolanki165@gmail.com'),
(46, 'JAY', '$2y$10$f3fNGpgm4uiU/SLUU8fM.uY48Cgdt.0.hOJlY3CNRgyUVdskztQ5K', 'dakshaysolanki@gmail.com'),
(47, 'Shraddha', '$2y$10$9KIL11zIv.daQ4Pn/y3Pqe04.RsB5ZotMzakcOJ16ULjpRNYCqv26', '20ceubg067@ddu.ac.in'),
(48, 'SMIT', '$2y$10$uXnI7zGDc4WvoXDp1VrnNuNqZfKXw4wQdVb2l0CxTSHBChgu3dqf.', 'dakshaysolanki@gmail.com'),
(49, 'SMITH', '$2y$10$fW7jLnMpBzVWHSOdHqP1zeSKx3stNC54jxLN597mp1ffjHCQORSpm', 'dakshaysolanki@gmail.com'),
(50, 'SHIVAM', '$2y$10$9cQ4DJ9pKorFg60cf5QEEOhYLsx1KfWUwg1YtSl/h7Jiie4HFm9Me', 'dakshaysolanki@gmail.com'),
(51, 'DEV', '$2y$10$BCWt9eE/gQMGmNhE4Ja8a.Or5gHU8D5KlPa.GUr4cDT3yvydm3Nuu', 'dakshaysolanki@gmail.com'),
(52, 'Devam', '$2y$10$etGoHBekZb.r1sISThJ8/OZkoMMJmnOgiakU6Nxhyk9nmVHYwMqu2', 'dakshaysolanki@gmail.com'),
(53, 'PRINCE', '$2y$10$M/0wCsRfE9KydtLFUFf/c.mgcADj4qwuZBg3po2HOFHGk5.aUw5sO', 'dakshaysolanki@gmail.com'),
(54, 'DEEPIKA', '$2y$10$qbIe5FwtaSh8Zg.HopJu/u8YOR41XE4Ko1JS/TQVvV9iRJO3nbFLC', '20ceubg067@ddu.ac.in'),
(55, 'PRIYANKA', '$2y$10$NjJ8j8hwxhtrakpryF2lW.9x0wwtxQ1Um4OLI.eFeDPsgVApzZPO2', '20ceubg067@ddu.ac.in'),
(56, 'YASH', '$2y$10$WH5ag5gNBahZLHDtkQbWR.6YnZybsRYe3wtZn6fSC7pON.eVDeuvG', 'dakshaysolanki@gmail.com'),
(57, 'Urvashi', '$2y$10$5AeQAldCoRnptsR0WlQEl.X4Wc6DX0WzBrk8z1Hxe3aNEZDPHehSS', '20ceubg067@ddu.ac.in'),
(58, 'PARTH', '$2y$10$FIH6n3wUzP/g3xHuxjMFM.zCejpUAhqmhXKv2rjNsIfGyiDfGZV82', 'dakshaysolanki@gmail.com'),
(59, 'vivek', '$2y$10$RZKkE2DT.sdomo3yeAD9AeEqMYC/OqonfjtzJOxsLzma6ZCzYizWC', 'dakshaysolanki@gmail.com'),
(60, 'RADHIKA', '$2y$10$caV4YjmSgF0MwhP7JHRmgO/WWUw5rKqg9xj0cJJSPTxjfUH3Z1tV2', '20ceubg067@ddu.ac.in'),
(61, 'ROCKY', '$2y$10$ZTPj4YZ0pfvtVVTAHy5t9egOpMsnZzugJY5d2haehU0MCqZIja67O', 'dakshaysolanki@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`Sr.No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `Sr.No` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
