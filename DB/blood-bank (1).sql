-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 06:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood-bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(14) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Bloodgroup` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `District` varchar(255) NOT NULL,
  `Zip` varchar(255) NOT NULL,
  `Profile` varchar(255) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `First_Name`, `Last_Name`, `Mobile`, `Email`, `Password`, `Bloodgroup`, `City`, `State`, `District`, `Zip`, `Profile`, `Date`) VALUES
(1, 'Admin', 'User', '07387545206', 'admin@gmail.com', '$2y$10$WZmvMPH7gYwaddF11XdC3.ejR35l2sl.EqnCJOogvx044a3bVsNKu', 'A+', 'Kalyan', 'Maharashtra', 'Thane', '421301', 'Upload/ani.png', '2022-10-28 09:49:11');

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

CREATE TABLE `camp` (
  `ID` int(14) NOT NULL,
  `Camp_name` varchar(255) NOT NULL,
  `sponsor_name` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `firstDate` varchar(255) NOT NULL,
  `lastDate` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `District` varchar(255) NOT NULL,
  `Zip` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camp`
--



-- --------------------------------------------------------

--
-- Table structure for table `camp_request`
--

CREATE TABLE `camp_request` (
  `ID` int(255) NOT NULL,
  `campname` varchar(255) NOT NULL,
  `spname` varchar(255) NOT NULL,
  `campemail` varchar(255) NOT NULL,
  `campadd` varchar(255) NOT NULL,
  `camplocation` varchar(255) NOT NULL,
  `campmobile` varchar(255) NOT NULL,
  `donarname` varchar(255) NOT NULL,
  `donaremail` varchar(255) NOT NULL,
  `donarmobile` varchar(255) NOT NULL,
  `donarblood` varchar(255) NOT NULL,
  `donaradd` varchar(255) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camp_request`
--



-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `ID` int(14) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `blood` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `camp` varchar(255) NOT NULL,
  `sp` varchar(255) NOT NULL,
  `campemail` varchar(255) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demo`
--



-- --------------------------------------------------------

--
-- Table structure for table `donar_registration`
--

CREATE TABLE `donar_registration` (
  `ID` int(14) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Bloodgroup` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `District` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `Profile` varchar(255) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donar_registration`
--



-- --------------------------------------------------------

--
-- Table structure for table `rent`
--



-- --------------------------------------------------------

--
-- Table structure for table `user_request`
--

CREATE TABLE `user_request` (
  `ID` int(14) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `Request_Name` varchar(255) NOT NULL,
  `Request_Email` varchar(255) NOT NULL,
  `Request_Mobile` varchar(255) NOT NULL,
  `Request_Bloodgroup` varchar(255) NOT NULL,
  `Request_Address` varchar(255) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_request`
--



--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `camp`
--
ALTER TABLE `camp`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `camp_request`
--
ALTER TABLE `camp_request`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `donar_registration`
--
ALTER TABLE `donar_registration`
  ADD PRIMARY KEY (`ID`);



--
-- Indexes for table `user_request`
--
ALTER TABLE `user_request`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `camp`
--
ALTER TABLE `camp`
  MODIFY `ID` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `camp_request`
--
ALTER TABLE `camp_request`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `ID` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donar_registration`
--
ALTER TABLE `donar_registration`
  MODIFY `ID` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_request`
--
ALTER TABLE `user_request`
  MODIFY `ID` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
