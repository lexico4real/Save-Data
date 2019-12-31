-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2019 at 09:04 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `save-data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` enum('1','2','3','4') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `first_name`, `last_name`, `email`, `pass`, `level`) VALUES
(1, 'Oluyinka', 'Abubakar', 'lexico4real@gmail.com', 'Oluyinka1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contact_message`
--

CREATE TABLE `contact_message` (
  `msgID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL,
  `msgDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_message`
--

INSERT INTO `contact_message` (`msgID`, `name`, `topic`, `email`, `message`, `msgDate`) VALUES
(1, 'Oluyinka Abubakar', 'Urgent', 'lexico4real@gmail.com', 'Hello', '2019-12-29 22:24:47'),
(2, 'Oluyinka Abubakar', 'Important', 'lexico4real@gmail.com', 'Hello', '2019-12-29 22:25:02'),
(3, 'Oluyinka Abubakar', 'Can you help?', 'lexico4real@gmail.com', 'Hello', '2019-12-29 22:25:24'),
(4, 'Oluyinka Abubakar', 'Satisfied service', 'lexico4real@gmail.com', 'Hello', '2019-12-29 22:25:48'),
(5, 'Oluyinka Abubakar', 'I like you guys', 'lexico4sure@gmail.com', 'I like you', '2019-12-29 22:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `regID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `otherName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `phoneNo1` varchar(20) NOT NULL,
  `phoneNo2` varchar(20) NOT NULL,
  `nok` varchar(50) NOT NULL,
  `note` varchar(200) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`regID`, `firstName`, `otherName`, `lastName`, `gender`, `email`, `dob`, `address1`, `address2`, `city`, `state`, `country`, `phoneNo1`, `phoneNo2`, `nok`, `note`, `regDate`) VALUES
(1, 'Oluyinka', '', 'Abubakar', 'male', 'lexico4real@gmail.com', '2002-07-24', '62, Evans Street', 'Eweina Area', 'Lagos Island', 'lagos', 'Nigeria', '08020796658', '', 'Oluyinka Abubakar', '', '2019-12-29 11:53:07'),
(2, 'Rukayat', 'Mojisola', 'Olatunji', 'female', 'rolatunjee@yahoo.com', '1999-06-15', '1A Agoiro Cour, Ricca Street', '', 'Lagos Island', 'Lagos', 'Nigeria', '07090908789', '', 'Bimpe Olatunji', '', '2019-12-29 12:03:55'),
(3, 'Bryan', 'Ki', 'Kobi', 'male', 'bryankikobi@gmail.com', '1999-10-19', '78, Victoria Lan', 'Ikoyi', 'Lagos', 'Lagos', 'Nigeria', '08020796658', '', 'Smith Kobi', '', '2019-12-30 09:39:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `contact_message`
--
ALTER TABLE `contact_message`
  ADD PRIMARY KEY (`msgID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`regID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_message`
--
ALTER TABLE `contact_message`
  MODIFY `msgID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `regID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
