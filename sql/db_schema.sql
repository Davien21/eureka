CREATE DATABASE IF NOT EXISTS `eureka` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `eureka`;
/*Change all lists to switch with plural endings*/
CREATE TABLE `eureka`.`users` (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	f_name VARCHAR(255),
	l_name VARCHAR(255),
	email VARCHAR(250) UNIQUE KEY,
	phone VARCHAR(14),
	pass VARCHAR(255),
	status VARCHAR (20) DEFAULT 'enabled',
	date_added timestamp DEFAULT current_timestamp(),
	last_edited timestamp DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `eureka`.`user_settings` (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	user_id VARCHAR(255),
	login_type VARCHAR(255),
	date_added timestamp DEFAULT current_timestamp(),
	last_edited timestamp DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `eureka`.`user_progress` (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	user_id VARCHAR(255),
	view VARCHAR(255),
	extra_details VARCHAR(255) DEFAULT NULL,
	date_added timestamp DEFAULT current_timestamp(),
	last_edited timestamp DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `eureka`.`hospitals` (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	name VARCHAR(255),
	address VARCHAR(255),
	director_id INT(11),
	invite_key VARCHAR(11),
	status VARCHAR (20) DEFAULT 'enabled',
	date_added timestamp DEFAULT current_timestamp(),
	last_edited timestamp DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `eureka`.`hospital_settings` (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	hospital_id INT(255),
	patient_ms VARCHAR(6),
	finance_ms VARCHAR(6),
	activity_ms VARCHAR(6),
	date_added timestamp DEFAULT current_timestamp(),
	last_edited timestamp DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `eureka`.`staff` (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	hospital_id VARCHAR(255),
	f_name VARCHAR(255),
	l_name VARCHAR(255),
	email VARCHAR(250) UNIQUE KEY,
	phone VARCHAR(14),
	pass VARCHAR(255),
	job_title VARCHAR(255),
	date_added timestamp DEFAULT current_timestamp(),
	last_edited timestamp DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `eureka`.`directors` (
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

