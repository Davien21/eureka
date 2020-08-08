
CREATE TABLE `heroku_a90165f761347d5`.`staff_list` (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	hospital_id VARCHAR(255),
	f_name VARCHAR(255),
	l_name VARCHAR(255),
	email VARCHAR(250) UNIQUE KEY,
	phone VARCHAR(14),
	pass VARCHAR(255),
	job_title VARCHAR(255),
	status VARCHAR (20) DEFAULT 'enabled',
	date_added timestamp DEFAULT current_timestamp(),
	last_edited timestamp 
) ;
CREATE TABLE `heroku_a90165f761347d5`.`hospital_list` (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	unique_id VARCHAR(11),
	name VARCHAR(255),
	director_id INT(11),
	status VARCHAR (20) DEFAULT 'enabled',
	date_added timestamp DEFAULT current_timestamp(),
	last_edited timestamp 
) ;
CREATE TABLE `heroku_a90165f761347d5`.`director_list` (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	hospital_id VARCHAR(255),
	f_name VARCHAR(255),
	l_name VARCHAR(255),
	email VARCHAR(250) UNIQUE KEY,
	phone VARCHAR(14),
	pass VARCHAR(255),
	status VARCHAR (20) DEFAULT 'enabled',
	date_added timestamp DEFAULT current_timestamp(),
	last_edited timestamp 
) ;
