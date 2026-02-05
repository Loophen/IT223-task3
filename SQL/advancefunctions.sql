-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2026 at 12:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diongzon_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `advancefunctions`
--

CREATE TABLE `advancefunctions` (
  `id` int(11) NOT NULL,
  `str_value` varchar(255) DEFAULT NULL,
  `num_value` int(11) DEFAULT NULL,
  `decimal_value` decimal(10,2) DEFAULT NULL,
  `date_value` date DEFAULT NULL,
  `nullable_value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `advancefunctions`
--

INSERT INTO `advancefunctions` (`id`, `str_value`, `num_value`, `decimal_value`, `date_value`, `nullable_value`) VALUES
(1, 'Jhosnnn ', 15, 12345.67, '2017-08-29', NULL),
(2, 'BysaDii.do', 30, 500.00, '2024-01-01', 'Not NULL'),
(3, 'Ahhhdiii', 8, 999.99, '2023-12-31', NULL),
(4, 'Test', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advancefunctions`
--
ALTER TABLE `advancefunctions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advancefunctions`
--
ALTER TABLE `advancefunctions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
