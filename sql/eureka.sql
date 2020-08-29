SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


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

INSERT INTO `directors` (`id`, `hospital_id`, `f_name`, `l_name`, `email`, `phone`, `pass`, `status`, `date_added`, `last_edited`) VALUES
(1, 'FnjNp7RhYc', 'Obioma', 'Ekennia', 'drobiiekennia@gmail.com', '08036677719', '$2y$10$3fdBJM9YrK3RREm3RMtQ8OCMoAXwp.5fpOAEzRYZdZ5wvmuRS59f6', 'enabled', '2020-08-05 23:51:25', '2020-08-06 08:13:12');

CREATE TABLE `hospitals` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `director_id` int(11) DEFAULT NULL,
  `invite_key` varchar(14) NOT NULL,
  `status` varchar(20) DEFAULT 'enabled',
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `hospitals` (`id`, `name`, `address`, `email`, `phone`, `director_id`, `invite_key`, `status`, `date_added`, `last_edited`) VALUES
(4, 'Cecilia Memorial Hospital, Ogbe', 'Ahiara Mbaise, Imo State.', 'drobiiekennia@gmail.com', '08036677719', 1, '3V9TetQNyP', 'enabled', '2020-08-22 12:12:58', '2020-08-22 12:12:58');

CREATE TABLE `hospital_settings` (
  `id` int(11) NOT NULL,
  `hospital_id` int(255) DEFAULT NULL,
  `patient_ms` varchar(6) DEFAULT NULL,
  `finance_ms` varchar(6) DEFAULT NULL,
  `activity_ms` varchar(6) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'enabled',
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `hospital_settings` (`id`, `hospital_id`, `patient_ms`, `finance_ms`, `activity_ms`, `status`, `date_added`, `last_edited`) VALUES
(3, 4, 'on', 'on', 'on', 'enabled', '2020-08-25 05:18:30', '2020-08-25 05:18:30');

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

INSERT INTO `staff` (`id`, `hospital_id`, `f_name`, `l_name`, `email`, `phone`, `pass`, `job_title`, `status`, `date_added`, `last_edited`) VALUES
(1, 'FnjNp7RhYc', 'Chidiebere', 'Ekennia', 'chidiebereekennia@gmail.com', '07012454621', '$2y$10$3fdBJM9YrK3RREm3RMtQ8OCMoAXwp.5fpOAEzRYZdZ5wvmuRS59f6', 'Accountant', 'enabled', '2020-08-06 15:24:41', '2020-08-06 15:24:52');

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

INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `phone`, `pass`, `status`, `date_added`, `last_edited`) VALUES
(1, 'Chidiebere', 'Ekennia', 'chidiebereekennia@gmail.com', '09036484534', '$2y$10$9mJtxxLYZV3DaKWj2/nCX.qa52/3Aslg7klqHgY.jMI7HLkTHZJ4e', 'enabled', '2020-08-20 21:53:47', '2020-08-21 01:22:31'),
(8, 'Kemedi', 'Opanola', 'firekid02@gmail.com', '08046945672', '$2y$10$9mJtxxLYZV3DaKWj2/nCX.qa52/3Aslg7klqHgY.jMI7HLkTHZJ4e', 'enabled', '2020-08-21 00:52:59', '2020-08-21 00:52:59'),
(9, 'Kingsley', 'Madueke', 'kinglseymadueke@gmail.com', '07012454621', '$2y$10$CxVqUyNykT0/2xoz9Rz.LO/sua8yVBop2wl.WyjxoaGLabtFt/0hq', 'enabled', '2020-08-21 19:40:59', '2020-08-21 19:40:59');

CREATE TABLE `user_settings` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `login_type` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'enabled',
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`email`);

ALTER TABLE `hospital_settings`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `user_settings`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `directors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `hospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `hospital_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `user_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
