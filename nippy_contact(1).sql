-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 08:34 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nippy_user_tbl`
--

-- --------------------------------------------------------

--
-- Table structure for table `nippy_contact`
--

CREATE TABLE `nippy_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjt` varchar(255) NOT NULL,
  `msg` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nippy_contact`
--

INSERT INTO `nippy_contact` (`id`, `name`, `email`, `subjt`, `msg`) VALUES
(97, 'Ritu gour', 'gourritu48@gmail.com', 'working', 'b'),
(98, 'Ritu gour', 'gourritu48@gmail.com', 'working', 'b'),
(99, 'Ritu gour', 'ritu@gour56.com', 'test', 'test'),
(100, 'ritu', 'gourritu48@gmail.com', 'working', 'test'),
(101, 'Ritu gour', 'gour12@gmail.om', 'working', 'hell');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nippy_contact`
--
ALTER TABLE `nippy_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nippy_contact`
--
ALTER TABLE `nippy_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
