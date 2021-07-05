-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 12:51 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `example`
--

CREATE TABLE `example` (
  `firstname` int(15) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `register_number` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `current_status` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `checkbox` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `example`
--

INSERT INTO `example` (`firstname`, `lastname`, `email`, `DOB`,`register_number`,`number`,`whatsapp`,`linkedin`,`organization`,`designation`,`address`,`program`,`department`,`batch`,`gender`,`current_status`,`marital_status`,`checkbox`) VALUES
('r', 'gfj', '202cb962ac59075b964b07152d234b70', 'DFH','Ela','tfyjfj','563547','67467','ghcg','gfjfj','ggg','szh','weGF','sdg','dgg','erahe','sdh','erhh','dhdh'),
('t', 'kgkj', '202cb962ac59075b964b07152d234b70','SDG', 'elias','gfjgfjhv','6565','75877','yititgy','fjfj','ytu','qdstj','qetgfq','dszh','dahg','reshse','srdhs','serhe','drh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `example`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `example`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
