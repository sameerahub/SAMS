-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 10:34 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sams`
--

-- --------------------------------------------------------

--
-- Table structure for table `att`
--

CREATE TABLE `att` (
  `At_id` int(200) NOT NULL,
  `id` int(200) NOT NULL,
  `record_date` datetime NOT NULL,
  `record_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `out_or_in` varchar(10) NOT NULL,
  `suspend` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roll`
--

CREATE TABLE `roll` (
  `int` int(200) NOT NULL,
  `id` int(200) DEFAULT NULL,
  `user_id` int(200) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `rolls` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roll`
--

INSERT INTO `roll` (`int`, `id`, `user_id`, `username`, `rolls`) VALUES
(1, 1, NULL, 'admin', 1),
(2, NULL, 1, 'user', 0),
(7, 2, NULL, 'admin1', 1),
(8, NULL, 2, 'user1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(200) NOT NULL,
  `sindex` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `batch` varchar(5) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `sindex`, `name`, `batch`, `email`) VALUES
(1, 'AA1907', 'Sameera', '7', 'adssaranga@gmail.com'),
(2, 'AA1819', 'Nipun', '5', 'nipun272000@gmail.com'),
(3, 'AA1865', 'Yomindu', '2', 'yomindurajasuriya@gmail.com'),
(4, 'AA1811', 'Pabasara', '6', 'manojipjayasooriya@gmail.com'),
(5, 'AA1930', 'Akila', '8', 'pathirageakiladananjana@gmail.com'),
(6, 'AA2105', 'Anuththara', '2', 'dilinianuththara94@gmail.com'),
(7, 'AA1802', 'Hiruni', '2', 'hirunihan@gmail.com'),
(8, 'AA1864', 'Pabasari', '3', 'pabasarigodagedara90@gmail.com'),
(9, 'AA2029', 'Nethmini', '3', 'tharushi0104@gmail.com'),
(10, 'AA1837', 'Amandi', '7', 'kavindiama2000@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(200) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'admin_0', 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'admin_1', 'admin1', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(200) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `username`, `password`) VALUES
(1, 'user_0', 'user', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'user_1', 'user1', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `att`
--
ALTER TABLE `att`
  ADD PRIMARY KEY (`At_id`);

--
-- Indexes for table `roll`
--
ALTER TABLE `roll`
  ADD PRIMARY KEY (`int`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `att`
--
ALTER TABLE `att`
  MODIFY `At_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roll`
--
ALTER TABLE `roll`
  MODIFY `int` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
