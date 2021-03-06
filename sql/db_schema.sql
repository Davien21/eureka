CREATE DATABASE IF NOT EXISTS `eureka` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `eureka`;
/*Change all lists to switch with plural endings*/
CREATE TABLE `users` (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	f_name VARCHAR(255),
	l_name VARCHAR(255),
	email VARCHAR(250) UNIQUE KEY,
	phone VARCHAR(14),
	pass VARCHAR(255),
	hospital_no INT(11),
	status VARCHAR (20) DEFAULT 'Active',
	date_added timestamp DEFAULT current_timestamp(),
	last_edited timestamp DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `patients` (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	hospital_id INT(11), 
	fname VARCHAR(255),
	lname VARCHAR(255),
	address VARCHAR(250),
	phone VARCHAR(14),
	kin_name VARCHAR(255),
	kin_num VARCHAR(14),
	status VARCHAR (20) DEFAULT 'Active',
	date_added timestamp DEFAULT current_timestamp(),
	last_edited timestamp DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `user_settings` (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	user_id INT(11),
	date_added timestamp DEFAULT current_timestamp(),
	last_edited timestamp DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `hospitals` (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	name VARCHAR(255),
	address VARCHAR(255),
	director_id INT(11),
	invite_key VARCHAR(11),
	status VARCHAR (20) DEFAULT 'Active',
	date_added timestamp DEFAULT current_timestamp(),
	last_edited timestamp DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `hospital_settings` (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	hospital_id INT(255),
	date_added timestamp DEFAULT current_timestamp(),
	last_edited timestamp DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `staff` (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	hospital_id VARCHAR(255),
	f_name VARCHAR(255),
	l_name VARCHAR(255),
	email VARCHAR(250) UNIQUE KEY,
	phone VARCHAR(14),
	pass VARCHAR(255),
	job_title VARCHAR(255),
	status VARCHAR (20) DEFAULT 'Active',
	date_added timestamp DEFAULT current_timestamp(),
	last_edited timestamp DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `directors` (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	hospital_id VARCHAR(255),
	f_name VARCHAR(255),
	l_name VARCHAR(255),
	email VARCHAR(250) UNIQUE KEY,
	phone VARCHAR(14),
	pass VARCHAR(255),
	date_added timestamp DEFAULT current_timestamp(),
	last_edited timestamp DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

