-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2024 at 02:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `userregitration`
--

CREATE TABLE `userregitration` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `useremail` varchar(255) DEFAULT NULL,
  `userpassword` varchar(255) DEFAULT NULL,
  `confirmpassword` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userregitration`
--

INSERT INTO `userregitration` (`userid`, `username`, `useremail`, `userpassword`, `confirmpassword`) VALUES
(1, 'busha', 'BUSHRA@GMAIL.COM', '1234344', '5464675'),
(2, 'utoof', 'utoof@gmail.com', '123456789', '123456789'),
(4, 'abcd', 'abcd@gmail.com', '123456789', '123456789'),
(5, 'abcd', 'abcd@gmail.com', '123456789', '123456789'),
(6, 'vila', 'vila@gmail.com', 'vilanaz', 'vilanaz'),
(7, 'tuba', 'tuba@gmail.com', 'tubakhan', 'tubakhan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userregitration`
--
ALTER TABLE `userregitration`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userregitration`
--
ALTER TABLE `userregitration`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
