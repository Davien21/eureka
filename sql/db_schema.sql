CREATE DATABASE IF NOT EXISTS `eureka` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `eureka`;
CREATE TABLE `eureka`.`staff_list` (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	hospital_id VARCHAR(255),
	f_name VARCHAR(255),
	l_name VARCHAR(255),
	email VARCHAR(250) UNIQUE KEY,
	phone VARCHAR(14),
	job_title VARCHAR(255),
	status VARCHAR (20) DEFAULT 'enabled',
	date_added timestamp DEFAULT current_timestamp(),
	last_edited timestamp DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `eureka`.`hospital_list` (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	unique_id VARCHAR(11),
	name VARCHAR(255),
	director_id INT(11),
	status VARCHAR (20) DEFAULT 'enabled',
	date_added timestamp DEFAULT current_timestamp(),
	last_edited timestamp DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `eureka`.`director_list` (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	hospital_id VARCHAR(255),
	f_name VARCHAR(255),
	l_name VARCHAR(255),
	email VARCHAR(250) UNIQUE KEY,
	phone VARCHAR(14),
	status VARCHAR (20) DEFAULT 'enabled',
	date_added timestamp DEFAULT current_timestamp(),
	last_edited timestamp DEFAULT current_timestamp() ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
