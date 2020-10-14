-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 04:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gripfoundation`
--

-- --------------------------------------------------------

--
-- Table structure for table `foundation`
--

CREATE TABLE `foundation` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `balance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foundation`
--

INSERT INTO `foundation` (`name`, `email`, `balance`) VALUES
('Aadesh', 'aadeshjadhav@gmail.com', 2222),
('Kunal', 'kunalkhedkar@gmail.com', 3003),
('Omkar', 'omkarjadhav@gmail.com', 2222),
('Ajinkya', 'ajinkyamali@gmail.com', 2222),
('Sarvesh', 'sarveshpacharne@gmail.com', 2222),
('Purushottam', 'purushottampanchal@gmail.com', 4445),
('Abhijeet', 'abhijeetmahajan@gmail.com', 4366),
('Rushikesh', 'rushikeshmatsagar@gmail.com', 2178),
('Osp', 'osp@gmail.com', 8426),
('Shardul', 'shardulgadhave@gmail.com', 1515),
('Aadesh', 'aadeshjadhav@gmail.com', 2222);

-- --------------------------------------------------------

--
-- Table structure for table `foundationdata`
--

CREATE TABLE `foundationdata` (
  `userid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foundationdata`
--

INSERT INTO `foundationdata` (`userid`, `name`, `email`, `balance`) VALUES
(1, 'Aadesh', 'aadeshjadhav@gmail.com', 4645),
(2, 'Kunal', 'kunalkhedkar@gmail.com', 5749),
(3, 'Omkar', 'omkarjadhav@gmail.com', 3640),
(4, 'Ajinkya', 'ajinkyamali@gmail.com', 2425),
(5, 'Sarvesh', 'sarveshpacharne@gmail.com', 8756),
(6, 'Purushottam', 'purushottampanchal@gmail.com', 4655),
(7, 'Abhijeet', 'abhijeetmahajan@gmail.com', 5646),
(8, 'Rushikesh', 'rushikeshmatsagar@gmail.com', 2225),
(9, 'Osp', 'osp@gmail.com', 3558),
(10, 'Shardul', 'shardulgadhave@gmail.com', 8292);

-- --------------------------------------------------------

--
-- Table structure for table `totaltransaction`
--

CREATE TABLE `totaltransaction` (
  `senderp` varchar(255) NOT NULL,
  `recieverp` varchar(255) NOT NULL,
  `amountp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `totaltransaction`
--

INSERT INTO `totaltransaction` (`senderp`, `recieverp`, `amountp`) VALUES
('Kunal', 'Ajinkya', 3),
('Aadesh', 'Kunal', 3),
('Omkar', 'Aadesh', 3),
('Aadesh', 'Kunal', 3),
('Sarvesh', 'Ajinkya', 10),
('Purushottam', 'Osp', 10),
('Kunal', 'Purushottam', 3),
('Omkar', 'Abhijeet', 3),
('Rushikesh', 'Ajinkya', 100),
('Shardul', 'Kunal', 100),
('Osp', 'Aadesh', 1000),
('Aadesh', 'Sarvesh', 1),
('Omkar', 'Abhijeet', 1000),
('Aadesh', 'Kunal', 1000),
('Kunal', 'Aadesh', 1000),
('Aadesh', 'Kunal', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foundationdata`
--
ALTER TABLE `foundationdata`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foundationdata`
--
ALTER TABLE `foundationdata`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
