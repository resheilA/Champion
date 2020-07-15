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
-- Table structure for table `trainer_charges`
--

CREATE TABLE `trainer_charges` (
  `id` int(11) NOT NULL,
  `uid` varchar(15) NOT NULL,
  `hourly_charges` decimal(10,0) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `training_hours` varchar(255) NOT NULL,
  `question_1` int(11) NOT NULL,
  `question_2` int(11) NOT NULL,
  `question_3` int(11) NOT NULL,
  `question_4` int(11) NOT NULL,
  `question_5` int(11) NOT NULL,
  `video_link_1` varchar(255) NOT NULL,
  `video_link_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer_charges`
--

INSERT INTO `trainer_charges` (`id`, `uid`, `hourly_charges`, `height`, `weight`, `training_hours`, `question_1`, `question_2`, `question_3`, `question_4`, `question_5`, `video_link_1`, `video_link_2`) VALUES
(7, 'SHdnzJjlNO', '232', 0, 0, '4+hrs', 0, 0, 1, 1, 1, 'https://www.youtube.com/embed/Kp9ba9SeIGE', 'https://www.youtube.com/embed/e1UsIaXWG24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trainer_charges`
--
ALTER TABLE `trainer_charges`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trainer_charges`
--
ALTER TABLE `trainer_charges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
