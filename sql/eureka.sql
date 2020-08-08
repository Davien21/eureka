-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 03:10 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eureka`
--

-- --------------------------------------------------------

--
-- Table structure for table `director_list`
--

CREATE TABLE `director_list` (
  `id` int(11) NOT NULL,
  `hospital_id` varchar(255) DEFAULT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(14) DEFAULT NULL,
  `pass` varchar(255) NOT NULL,
  `status` varchar(20) DEFAULT 'enabled',
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `director_list`
--

INSERT INTO `director_list` (`id`, `hospital_id`, `f_name`, `l_name`, `email`, `phone`, `pass`, `status`, `date_added`, `last_edited`) VALUES
(1, 'FnjNp7RhYc', 'Obioma', 'Ekennia', 'drobiiekennia@gmail.com', '08036677719', '$2y$10$3fdBJM9YrK3RREm3RMtQ8OCMoAXwp.5fpOAEzRYZdZ5wvmuRS59f6', 'enabled', '2020-08-05 23:51:25', '2020-08-06 08:13:12');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_list`
--

CREATE TABLE `hospital_list` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `director_id` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'enabled',
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital_list`
--

INSERT INTO `hospital_list` (`id`, `unique_id`, `name`, `director_id`, `status`, `date_added`, `last_edited`) VALUES
(1, 'FnjNp7RhYc', 'Cecilia Memorial Hospital', 1, 'enabled', '2020-08-05 23:16:05', '2020-08-05 23:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `staff_list`
--

CREATE TABLE `staff_list` (
  `id` int(11) NOT NULL,
  `hospital_id` varchar(255) DEFAULT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(14) DEFAULT NULL,
  `pass` varchar(255) NOT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'enabled',
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_list`
--

INSERT INTO `staff_list` (`id`, `hospital_id`, `f_name`, `l_name`, `email`, `phone`, `pass`, `job_title`, `status`, `date_added`, `last_edited`) VALUES
(1, 'FnjNp7RhYc', 'Chidiebere', 'Ekennia', 'chidiebereekennia@gmail.com', '07012454621', '$2y$10$3fdBJM9YrK3RREm3RMtQ8OCMoAXwp.5fpOAEzRYZdZ5wvmuRS59f6', 'Accountant', 'enabled', '2020-08-06 15:24:41', '2020-08-06 15:24:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `director_list`
--
ALTER TABLE `director_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `hospital_list`
--
ALTER TABLE `hospital_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_list`
--
ALTER TABLE `staff_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `director_list`
--
ALTER TABLE `director_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospital_list`
--
ALTER TABLE `hospital_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_list`
--
ALTER TABLE `staff_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
