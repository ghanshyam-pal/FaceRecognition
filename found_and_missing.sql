-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 01:55 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `found_and_missing`
--

-- --------------------------------------------------------

--
-- Table structure for table `found`
--

CREATE TABLE `found` (
  `id` int(7) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `found_date` datetime DEFAULT current_timestamp(),
  `image` varchar(200) DEFAULT NULL,
  `missing_id` int(7) DEFAULT NULL,
  `user_id` int(7) DEFAULT NULL,
  `status` int(7) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `found`
--

INSERT INTO `found` (`id`, `name`, `phone`, `address`, `description`, `state`, `city`, `found_date`, `image`, `missing_id`, `user_id`, `status`) VALUES
(9, 'Ishant Sharma', '1234567890', 'h202 adsd asd  adsdasd', 'asas', 'Delhi', 'New Delhi', '2023-11-23 00:00:00', 'uploads/found/1701087451_7662ee9138018e425ddd.jpg', NULL, 1, 1),
(10, 'Ishant Sharma', '1234567890', 'sdf', 'sdf', 'Sdf', 'Noida', '2023-11-30 00:00:00', 'uploads/found/1701087506_5414ee492432ec711dc4.jpeg', NULL, 1, 1),
(11, 'Ishant Sharma', '1234567890', 'sdf', 'sdf', 'Sdf', 'Noida', '2023-11-30 00:00:00', 'uploads/found/1701087883_05798c40547baad1f56e.jpeg', NULL, 1, 1),
(12, 'Ishant Sharma', '1234567890', '12345', 'z', 'Delhi', 'Delhi', '2023-12-02 00:00:00', 'uploads/found/1701088131_7dd7e6639bc1fceacc23.jpg', NULL, 1, 1),
(13, 'Ishant Sharma', '1234567890', 'h202 adsd asd  adsdasd', 'asdf', 'UP', 'Delhi', '2023-11-30 00:00:00', 'uploads/found/1701089048_7c3ae48655d414753dab.jpeg', NULL, 1, 1),
(14, 'Ishant Sharma', '1234567890', 'h202 adsd asd  adsdasd', 'asdf', 'UP', 'Delhi', '2023-11-30 00:00:00', 'uploads/found/1701089088_ccdb61683350f43e407a.jpeg', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `missing`
--

CREATE TABLE `missing` (
  `id` int(7) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `missing_date` datetime DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `status` int(7) DEFAULT NULL,
  `user_id` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `missing`
--

INSERT INTO `missing` (`id`, `name`, `phone`, `address`, `description`, `state`, `city`, `missing_date`, `image`, `status`, `user_id`) VALUES
(10, 'Ishant Sharma', '1234567890', 'h202 adsd asd  adsdasd', 'as', 'Delhi', 'Delhi', '2023-12-01 00:00:00', 'uploads/missing/1701087406_239d52e9990b59857269.jpg', 9, 1),
(11, 'Ishant Sharma', '1234567890', 'h202 adsd asd  adsdasd', 'asa', 'Erte', 'Noida', '2023-11-30 00:00:00', 'uploads/missing/1701088221_bb49fb98898b273bc294.jpeg', 13, 1),
(12, 'Ishant Sharma', '1234567890', 'as', 'as', 'Sdf', 'Noida', '2023-11-30 00:00:00', 'uploads/missing/1701088792_9fa73edb6bdcf944a7ee.jpeg', 14, 1),
(13, 'Ishant Sharma', '1234567890', 'as', 'as', 'Sdf', 'Noida', '2023-11-30 00:00:00', 'uploads/missing/1701088861_ab9586449322cb893cb0.jpeg', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(7) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`) VALUES
(1, 'ghanshyampal789@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(2, 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `found`
--
ALTER TABLE `found`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missing`
--
ALTER TABLE `missing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `found`
--
ALTER TABLE `found`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `missing`
--
ALTER TABLE `missing`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
