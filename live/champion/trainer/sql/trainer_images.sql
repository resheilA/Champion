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
-- Table structure for table `trainer_images`
--

CREATE TABLE `trainer_images` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `randomid` varchar(255) NOT NULL,
  `certificate` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `aadhar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer_images`
--

INSERT INTO `trainer_images` (`id`, `uid`, `randomid`, `certificate`, `degree`, `aadhar`) VALUES
(3, 'SHdnzJjlNO', 'PAAdm3AI4i', 'uploads/bR2QB1OB6c_certificate/a6df9b6eabc851dad542bbf3e7bfc08b.jpg', 'uploads/k74QW68Ojd_degree/d0e0e57641330e40ab3a952c2908bfb4.png', 'uploads/iOnnBBAT24_aadhar/c2e99d7a1f257915af38aff0893207ac.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trainer_images`
--
ALTER TABLE `trainer_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trainer_images`
--
ALTER TABLE `trainer_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
