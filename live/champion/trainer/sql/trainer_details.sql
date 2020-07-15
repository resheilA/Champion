-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 04:52 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sport`
--

-- --------------------------------------------------------

--
-- Table structure for table `trainer_details`
--

CREATE TABLE `trainer_details` (
  `id` int(11) NOT NULL,
  `uid` varchar(15) NOT NULL,
  `pincode` int(11) NOT NULL,
  `add_contact_no` varchar(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `about_us` text NOT NULL,
  `sports` text NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer_details`
--

INSERT INTO `trainer_details` (`id`, `uid`, `pincode`, `add_contact_no`, `address`, `about_us`, `sports`, `type`) VALUES
(31, 'SHdnzJjlNO', 442212, '2124212321', 'dsd', 'dsd', 'football, mma', 'Coach');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trainer_details`
--
ALTER TABLE `trainer_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `randomid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trainer_details`
--
ALTER TABLE `trainer_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
