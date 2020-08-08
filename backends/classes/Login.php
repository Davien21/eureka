<?php
	/**
	 * This Class is responsible for all logins on this App
	 * See Chidiebere Ekennia for reference
	 */
	class Login extends DBConnect
	{
		 
		public function check_valid_identity ($login_type,$identity,$pass) {
			$sql = "SELECT * 
					FROM {$login_type}_list
					WHERE ((email = :input) 
					OR (phone = :input)) 
					AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute([':input'=>$identity]);
			// print_r($check_query->errorInfo());
			$record = $check_query->fetchColumn();
			return $record;
		}
		public function check_valid_pass ($login_type,$identity,$pass) {
			$sql = "SELECT * 
					FROM {$login_type}_list
					WHERE ((email = :input) 
					OR (phone = :input)) 
					AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute([':input'=>$identity]);
			$record = $check_query->fetch(PDO::FETCH_ASSOC);
			return password_verify($pass, $record['pass']) ;
		}
		public function grant_login_access ($login_type) {
			$_SESSION['user'] = $login_type;
			$_SESSION['id'] = $is_valid_user['id'];
			if ($login_type === 'director') header('Location:./director/index.php');
			if ($login_type === 'staff') header('Location:./staff/index.php');
		}
		public function grant_staff_login () {
			echo "Success staff login";
		}
		
	}
?>