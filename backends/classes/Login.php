	<?php
	/**
	 * This Class is responsible for all logins on this App
	 * See Chidiebere Ekennia for reference
	 */
	class Login extends DBConnect
	{
		public function __construct ($table) {
			parent::__construct();
			$this->table = $table;
		}
		public function __toString () {
			return "Name: ".__CLASS__."<br>This Object allows you to login a user";
		}
		public function check_valid_identity ($identity,$pass) {
			$sql = "SELECT * 
					FROM {$this->table}
					WHERE ((email = :input) 
					OR (phone = :input))"; 
			$check_query = PDO::prepare($sql);
			$check_query->execute([':input'=>$identity]);
			// print_r($check_query->errorInfo());
			$is_existing_input = $check_query->fetchColumn();
			if (!$is_existing_input) return "This Email is not registered";
			
		}
		public function check_valid_pass ($identity,$pass) {
			$sql = "SELECT * 
					FROM {$this->table}
					WHERE ((email = :input) 
					OR (phone = :input))"; 
			$check_query = PDO::prepare($sql);
			$check_query->execute([':input'=>$identity]);
			// print_r($check_query->errorInfo());

			$hashed_pass = $check_query->fetch(PDO::FETCH_ASSOC)['pass'];
			$is_correct_pass = password_verify($pass, $hashed_pass);
			if (!$is_correct_pass) return "Wrong Password";
		}

		public function get_user_id($input)	{
			$sql = "SELECT id 
					FROM {$this->table}
					WHERE ((email = :input) 
					OR (phone = :input))"; 
			$check_query = PDO::prepare($sql);
			$check_query->execute(["input"=>$input]);
			// echo print_r($check_query->errorInfo());
			return $id = $check_query->fetch(PDO::FETCH_ASSOC)['id'];
		}
		public function grant_login ($input) {
			session_start();
			$_SESSION['user'] = $this->get_user_id($input);
			header('Location:./user/');
		}
		
	}
?>