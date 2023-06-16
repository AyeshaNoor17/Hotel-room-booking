-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 11:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `cusid` int(16) NOT NULL,
  `cusname` varchar(16) NOT NULL,
  `cusno` int(16) NOT NULL,
  `datein` date NOT NULL,
  `dateout` date NOT NULL,
  `payment` int(16) NOT NULL,
  `roomid` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `rid` int(16) NOT NULL,
  `rpeople` int(16) NOT NULL,
  `rarea` float NOT NULL,
  `booked` varchar(16) NOT NULL,
  `ppd` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`rid`, `rpeople`, `rarea`, `booked`, `ppd`) VALUES
(1, 2, 1000, 'Yes', 2000),
(2, 2, 1000, 'No', 2000),
(3, 2, 1200, 'No', 2200),
(4, 3, 1200, 'No', 2700),
(5, 3, 1500, 'No', 3000),
(6, 4, 1800, 'No', 3300),
(7, 4, 1500, 'No', 2200),
(8, 5, 1800, 'No', 3300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uname` text NOT NULL,
  `upass` text NOT NULL,
  `uphone` text NOT NULL,
  `uemail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uname`, `upass`, `uphone`, `uemail`) VALUES
('Ehtisham', '1148', '03074624232', 'ehtisham@gmail.com'),
('Talha', '1122', '03074624456', 'talha@gmail.com'),
('Haider', '1122', '03074624333', 'haider@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `rid` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
