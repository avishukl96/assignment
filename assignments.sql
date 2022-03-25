-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2022 at 09:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignments`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`) VALUES
(1, 'IT'),
(2, 'Sales'),
(3, 'Education '),
(4, 'Management');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `salary` int(255) DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `hobbies` text DEFAULT NULL,
  `gender` enum('F','M') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `salary`, `dept_id`, `hobbies`, `gender`) VALUES
(1, 'Felale', 1, 4, 'Reading,Surfing', ''),
(2, 'Stark', 2, 2, 'Reading,Swiming', 'F'),
(4, 'Avanish', 3, 1, 'Reading,Cricket', ''),
(5, 'Felale', 4, 4, 'Reading,Surfing', ''),
(6, 'Stark', 5, 2, 'Reading,Swiming', 'F'),
(7, 'Avanish', 6, 1, 'Reading,Cricket', '');

-- --------------------------------------------------------

--
-- Table structure for table `structure`
--

CREATE TABLE `structure` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `structure`
--

INSERT INTO `structure` (`id`, `parent_id`, `name`, `code`, `description`) VALUES
(1, 0, 'Level1', 'ASDF', '<p>SDFS</p>'),
(2, 1, 'Level2', 'SDF', 'SDF'),
(3, 2, 'Level3', 'ASDF', 'SADSA'),
(7, 2, 'Level22', 'SDF', 'SDF'),
(8, 3, 'Level4', 'ASDF', 'SADSA'),
(9, 7, 'level222', 'ASDF', '<p>level222<br></p>'),
(10, 1, 'Level11', 'Level11', '<p>Level111<br></p>'),
(11, 10, 'Avanish', 'fghfg', '<p>qwewq</p>'),
(14, 1, 'Avanish Shukla', 'eqwe', '<p>ASA</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `structure`
--
ALTER TABLE `structure`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `structure`
--
ALTER TABLE `structure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
