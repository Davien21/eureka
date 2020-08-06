<?php
	/**
	 * This Class is responsible for all logins on this App
	 * See Chidiebere Ekennia for reference
	 */
	class Login extends DBConnect
	{
		 
		public function check_valid_login ($login_type,$identity,$pass) {
			$sql = "SELECT * 
					FROM {$login_type}_list
					WHERE ((email = :input) 
					OR (phone = :input)) 
					AND status = 'enabled'";
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