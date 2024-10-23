-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2024 at 10:59 AM
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
-- Database: `healthcareportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `patientinfo_tb`
--

CREATE TABLE `patientinfo_tb` (
  `patient_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `midname` varchar(64) DEFAULT NULL,
  `lastname` varchar(64) NOT NULL,
  `suffix` varchar(20) DEFAULT NULL,
  `contnum` bigint(12) NOT NULL,
  `emailadd` varchar(255) NOT NULL,
  `datebirth` date NOT NULL,
  `gender` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patientinfo_tb`
--

INSERT INTO `patientinfo_tb` (`patient_id`, `firstname`, `midname`, `lastname`, `suffix`, `contnum`, `emailadd`, `datebirth`, `gender`, `address`) VALUES
(1, 'Juan', 'Dela', 'Cruz', NULL, 9214953607, 'juandelacruz@gmail.com', '2024-10-01', 'male', 'B7 L42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patientinfo_tb`
--
ALTER TABLE `patientinfo_tb`
  ADD PRIMARY KEY (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patientinfo_tb`
--
ALTER TABLE `patientinfo_tb`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
