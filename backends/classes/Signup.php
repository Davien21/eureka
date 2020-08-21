<?php
	/**
	 * This Class is responsible for all Signups on this App
	 * See Chidiebere Ekennia for reference
	 */
	class Signup extends DBConnect
	{	
		public function __construct ($table) {
			parent::__construct();
			$this->table = $table;
		}
		public function check_if_in_db ($input,$type) {
			$sql = "SELECT 1 FROM {$this->table}
					WHERE {$type} = :input 
					AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute([':input'=>$input]);
			// print_r($check_query->errorInfo());
			$is_existing_input = $check_query->fetchColumn();
			if (!$is_existing_input) return;
			if ($type === 'email') return "This Email Address is already registered";
			if ($type === 'phone') return "This Phone Number is already registered";
		}
		public function hash_pass ($password) {
			return password_hash($password, PASSWORD_DEFAULT);
		}
		public function add_user($f_name,$l_name,$email,$phone,$pass) {
			$sql = "INSERT INTO {$this->table}(f_name,l_name,email,phone,pass)
					VALUES(:f_name,:l_name,:email,:phone,:pass)";
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute([
					'f_name'=>$f_name,'l_name'=>$l_name,
					'email'=>$email,'phone'=> $phone,'pass'=>$this->hash_pass($pass)
				]);
			if ($insert_query ->errorCode() == 0) return;
			$error = $insert_query->errorInfo();
			// print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
			return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
		}
		public function get_user_id($input)	{
			$sql = "SELECT id 
					FROM {$this->table}
					WHERE ((email = :input) 
					OR (phone = :input)) 
					AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute(["input"=>$input]);
			// echo print_r($check_query->errorInfo());
			return $id = $check_query->fetch(PDO::FETCH_ASSOC)['id'];
		}
		public function login ($input) {
			session_start();
			$_SESSION['user'] = $this->get_user_id($input);
			header('Location:./user');
		}
		
		
	}
?>