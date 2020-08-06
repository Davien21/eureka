<?php
	/**
	 * This Class is responsible for all logins on this App
	 * See Chidiebere Ekennia for reference
	 */
	class Login extends DBConnect
	{
		 
		public function check_valid_login ($login_type,$identity,$pass) {
			$sql = "CREATE TABLE `heroku_a90165f761347d5`.`staff_list` (
	id INT AUTO_INCREMENT PRIMARY KEY, 
	hospital_id VARCHAR(255),
	f_name VARCHAR(255),
	l_name VARCHAR(255),
	email VARCHAR(250) UNIQUE KEY,
	phone VARCHAR(14),
	job_title VARCHAR(255),
	status VARCHAR (20) DEFAULT 'enabled',
	date_added timestamp";
			$check_query = PDO::prepare($sql);
			$check_query->execute([':input'=>$identity]);
			print_r($check_query->errorInfo());
			$record = $check_query->fetch(PDO::FETCH_ASSOC);
			return $record;
		}
		public function director_login () {
			
		}
		public function staff_login () {
			echo "Success staff login";
		}
		
	}
?>