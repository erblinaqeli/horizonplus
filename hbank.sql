-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 09:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `aid` int(11) NOT NULL,
  `account_nr` bigint(20) NOT NULL,
  `funds` double DEFAULT NULL,
  `uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`aid`, `account_nr`, `funds`, `uid`) VALUES
(1, 115363222152500525, 1000.52, 23),
(2, 553212200255, 200.23, 22),
(3, 55200225, 0, 25);

-- --------------------------------------------------------

--
-- Table structure for table `borgji`
--

CREATE TABLE `borgji` (
  `bid` int(11) NOT NULL,
  `arsyeja` varchar(50) NOT NULL,
  `shuma` int(11) DEFAULT NULL,
  `aprovim/refuzim` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borgji`
--

INSERT INTO `borgji` (`bid`, `arsyeja`, `shuma`, `aprovim/refuzim`, `uid`) VALUES
(18, 'Per te blere nje vetur', 500, 1, 23),
(19, 'Per te blere toke', 1000, 1, 25),
(20, 'Per te blere nje vetur', 1650, 0, 22);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `user_level` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `fullname`, `email`, `username`, `mobile`, `password`, `user_level`) VALUES
(3, 'Horizon Plus', 'horizon@gmail.com', 'horizonplus', '044555888', '202cb962ac59075b964b07152d234b70', '1'),
(21, 'Ryo Qeli', 'ryo@gmail.com', 'lyly', '044887888', '202cb962ac59075b964b07152d234b70', '2'),
(22, 'Gention Qeli', 'gentionqeli@gmail.com', 'gentiq', '045888555', '202cb962ac59075b964b07152d234b70', '3'),
(23, 'Olta Qeli', 'olta@gmail.com', 'olta12', '044551443', '202cb962ac59075b964b07152d234b70', '3'),
(24, 'Rain', 'admin@gmail.com', 'rain', '044122135', '202cb962ac59075b964b07152d234b70', '2'),
(25, 'Jane', 'jane@gmail.com', 'Adams', '045888884', '202cb962ac59075b964b07152d234b70', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `FK_accountUser` (`uid`);

--
-- Indexes for table `borgji`
--
ALTER TABLE `borgji`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `FK_BorgjiUseri` (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `borgji`
--
ALTER TABLE `borgji`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `FK_accountUser` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `borgji`
--
ALTER TABLE `borgji`
  ADD CONSTRAINT `FK_BorgjiUseri` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
