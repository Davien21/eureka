<?php
	/**
	 * This Class is responsible for any and all registration activities on the app
	 */
	class HospitalSetup extends DBConnect
	{
		public function __construct ($hospital_id) {
			parent::__construct();
			$this->hospital_id = $hospital_id;
		}
		public function __toString () {
			return "Name: ".__CLASS__."<br>This Object allows you to handle CRUD on a hospital setup";
		}
		public function check_if_in_db ($input,$field) {
			$sql = "SELECT 1 FROM hospitals
					WHERE {$field} = :input";
			$check_query = PDO::prepare($sql);
			$check_query->execute([':input'=>$input]);
			// print_r($check_query->errorInfo());
			$is_existing_input = $check_query->fetchColumn();
			if (!$is_existing_input) return;
			if ($field === 'email') return "This Email Address is already registered";
			if ($field === 'phone') return "This Phone Number is already registered";
		}
		public function check_repeated_hospital ($user_id,$name) {
			$sql = "SELECT 1 FROM hospitals
					WHERE director_id = :user_id
					AND name = :name";
			$check_query = PDO::prepare($sql);
			$check_query->execute([':user_id'=>$user_id,':name'=>$name]);
			// print_r($check_query->errorInfo());
			$is_existing_input = $check_query->fetchColumn();
			if (!$is_existing_input) return;
			return "You have already registered this hospital";
		}
		public function get_random_id ($field) {
			$possibles = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
			$unique_id = substr(str_shuffle($possibles),0, 10); 
			$sql = "SELECT 1 FROM hospitals
					WHERE {$field} = :input";
			$check_query = PDO::prepare($sql);
			$check_query->execute([':input'=>$unique_id]);
			// echo print_r($check_query->errorInfo());
			$isExisting = $check_query->fetchColumn();
			if ($isExisting) $this->get_random_id();
			else return $unique_id;
		}
		public function add_hospital($director_id,$name,$address,$invite_key) {
			$sql = "INSERT INTO hospitals(director_id,name,address,invite_key)
					VALUES(:director_id,:name,:address,:invite_key)";
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute([
					'director_id'=>$director_id,'name'=>$name,'address'=>$address,
					'invite_key'=>$invite_key
				]);
			if ($insert_query ->errorCode() == 0) return;
			$error = $insert_query->errorInfo();
			// print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
			return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
		}
		public function add_director($user_id,$name,$address,$invite_key) {
			$sql = "INSERT INTO hospitals(director_id,name,address,invite_key)
					VALUES(:director_id,:name,:address,:invite_key)";
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute([
					'director_id'=>$director_id,'name'=>$name,'address'=>$address,
					'invite_key'=>$invite_key
				]);
			if ($insert_query ->errorCode() == 0) return;
			$error = $insert_query->errorInfo();
			// print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
			return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
		}
		public function partial_update($field,$value) {
			$sql = "UPDATE hospitals
					SET	{$field} = :input
					WHERE hospital_id = :id";
			$insert_query = PDO::prepare($sql);
			$insert_query->execute(['input'=>$value,'id'=>$this->hospital_id]);
			if ($insert_query ->errorCode() == 0) return;
			$error = $insert_query->errorInfo();
			// print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
			return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
		}
		
	}

?>