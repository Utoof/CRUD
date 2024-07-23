-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2024 at 05:17 PM
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
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `booksdetail`
--

CREATE TABLE `booksdetail` (
  `bookid` int(11) NOT NULL,
  `bookname` varchar(225) DEFAULT NULL,
  `bookcategory` varchar(255) DEFAULT NULL,
  `bookpublishdate` date DEFAULT NULL,
  `bookauthor` varchar(255) DEFAULT NULL,
  `booktotalpage` int(11) DEFAULT NULL,
  `bookprice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booksdetail`
--

INSERT INTO `booksdetail` (`bookid`, `bookname`, `bookcategory`, `bookpublishdate`, `bookauthor`, `booktotalpage`, `bookprice`) VALUES
(24, ' Jane Eyre', '1', '2024-06-04', 'Brandon Sanderson', 10, 500),
(25, ' Moby-Dick', '2', '2024-07-02', 'Rick Riordan', 12, 600),
(26, 'The Great Gatsby', '3', '2024-06-30', 'Robin Hobb', 15, 800),
(27, 'Lord of the Rings', '2', '2024-07-03', 'R.K. Narayan', 14, 400),
(28, 'To Kill a Mockingbird', '2', '2024-08-07', 'Amrita Pritam', 16, 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booksdetail`
--
ALTER TABLE `booksdetail`
  ADD PRIMARY KEY (`bookid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booksdetail`
--
ALTER TABLE `booksdetail`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
