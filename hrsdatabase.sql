-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 03:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrsdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `scheduleID` int(11) NOT NULL,
  `EmpID` int(11) NOT NULL,
  `Last Name` varchar(40) NOT NULL,
  `Days Avail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`scheduleID`, `EmpID`, `Last Name`, `Days Avail`) VALUES
(1, 101, 'Patel', 'M-F');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmpID` int(5) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL DEFAULT 'P@ssword1',
  `DateHired` date NOT NULL,
  `RoleID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmpID`, `FirstName`, `LastName`, `Username`, `Email`, `Password`, `DateHired`, `RoleID`) VALUES
(100, 'John', 'Doe', 'johdoe100', 'johdoe100@email.com', 'Abc123!?', '2013-05-09', 1),
(101, 'Trystan', ' Patel', 'trypat101', 'trypat101@email.com', '567gum?', '2013-05-23', 2),
(102, 'Brad', 'Richards', 'braric102', 'braric102@gmail.com', 'P@ssword1', '2015-02-03', 3),
(103, 'Alastair', 'Burke', 'Alabur103', 'Alabur103@email.com', 'NewPass!?2', '2013-08-14', 3),
(104, 'New', 'Emp', 'NewEmp999', 'NewEmp999@gmail.com', 'P@ssword1', '2023-05-18', 3),
(105, 'Randy', 'Bellet', 'ranbell105', 'ranbell105@email.com', 'NewPass100!', '2023-05-20', 2);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `RequestID` int(11) NOT NULL,
  `EmpName` varchar(50) NOT NULL,
  `EmpID` int(11) NOT NULL,
  `DateStart` date NOT NULL,
  `DateEnd` date NOT NULL,
  `Comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`RequestID`, `EmpName`, `EmpID`, `DateStart`, `DateEnd`, `Comments`) VALUES
(10, 'test', 111, '2023-05-20', '2023-05-21', 'test'),
(13, 'test', 0, '0000-00-00', '0000-00-00', ''),
(16, '22', 0, '0000-00-00', '0000-00-00', ''),
(17, 'test', 0, '2023-05-25', '2023-05-26', ''),
(18, 'test', 101, '2023-05-27', '2023-05-28', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `RoleID` int(11) NOT NULL,
  `RoleName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`RoleID`, `RoleName`) VALUES
(1, 'Admin'),
(2, 'Manager'),
(3, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `AssignmentID` int(11) NOT NULL,
  `EmpID` int(11) NOT NULL,
  `LastName` varchar(40) NOT NULL,
  `DaysWorking` varchar(50) NOT NULL,
  `Shift` int(11) NOT NULL,
  `Hours This Week` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`AssignmentID`, `EmpID`, `LastName`, `DaysWorking`, `Shift`, `Hours This Week`) VALUES
(1, 101, 'Patel', '', 0, 40),
(2, 101, 'Patel', '', 0, 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`scheduleID`),
  ADD KEY `EmpID` (`EmpID`) USING BTREE;

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmpID`),
  ADD KEY `RoleID` (`RoleID`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`RequestID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`RoleID`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`AssignmentID`),
  ADD KEY `EmpID` (`EmpID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `scheduleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmpID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `RequestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `RoleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `AssignmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`EmpID`) REFERENCES `employee` (`EmpID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
