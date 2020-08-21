-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 09:46 PM
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
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
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
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`id`, `hospital_id`, `f_name`, `l_name`, `email`, `phone`, `pass`, `status`, `date_added`, `last_edited`) VALUES
(1, 'FnjNp7RhYc', 'Obioma', 'Ekennia', 'drobiiekennia@gmail.com', '08036677719', '$2y$10$3fdBJM9YrK3RREm3RMtQ8OCMoAXwp.5fpOAEzRYZdZ5wvmuRS59f6', 'enabled', '2020-08-05 23:51:25', '2020-08-06 08:13:12');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `director_id` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'enabled',
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `unique_id`, `name`, `director_id`, `status`, `date_added`, `last_edited`) VALUES
(1, 'FnjNp7RhYc', 'Cecilia Memorial Hospital', 1, 'enabled', '2020-08-05 23:16:05', '2020-08-05 23:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
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
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `hospital_id`, `f_name`, `l_name`, `email`, `phone`, `pass`, `job_title`, `status`, `date_added`, `last_edited`) VALUES
(1, 'FnjNp7RhYc', 'Chidiebere', 'Ekennia', 'chidiebereekennia@gmail.com', '07012454621', '$2y$10$3fdBJM9YrK3RREm3RMtQ8OCMoAXwp.5fpOAEzRYZdZ5wvmuRS59f6', 'Accountant', 'enabled', '2020-08-06 15:24:41', '2020-08-06 15:24:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(14) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'enabled',
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `phone`, `pass`, `status`, `date_added`, `last_edited`) VALUES
(1, 'Chidiebere', 'Ekennia', 'chidiebereekennia@gmail.com', '09036484534', '$2y$10$9mJtxxLYZV3DaKWj2/nCX.qa52/3Aslg7klqHgY.jMI7HLkTHZJ4e', 'enabled', '2020-08-20 21:53:47', '2020-08-21 01:22:31'),
(8, 'Kemedi', 'Opanola', 'firekid02@gmail.com', '08046945672', '$2y$10$9mJtxxLYZV3DaKWj2/nCX.qa52/3Aslg7klqHgY.jMI7HLkTHZJ4e', 'enabled', '2020-08-21 00:52:59', '2020-08-21 00:52:59'),
(9, 'Kingsley', 'Madueke', 'kinglseymadueke@gmail.com', '07012454621', '$2y$10$CxVqUyNykT0/2xoz9Rz.LO/sua8yVBop2wl.WyjxoaGLabtFt/0hq', 'enabled', '2020-08-21 19:40:59', '2020-08-21 19:40:59');

-- --------------------------------------------------------

--
-- Table structure for table `user_settings`
--

CREATE TABLE `user_settings` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `login_type` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'enabled',
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_settings`
--
ALTER TABLE `user_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `directors`
--
ALTER TABLE `directors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_settings`
--
ALTER TABLE `user_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
