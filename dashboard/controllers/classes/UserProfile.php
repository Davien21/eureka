<?php
	/**
	 * This Class is responsible for all logins on this App
	 * See Chidiebere Ekennia for reference
	 */
	class UserProfile extends DBConnect
	{
		public function __construct ($id) {
			parent::__construct();
			$this->user_id = $id;
		}
		public function __toString () {
			return "This Object allows you to perform CRUD operations on a user profile";
		}
		public function get_user_profile()	{
			$sql = "SELECT * 
					FROM users
					WHERE id = :id";
			$check_query = PDO::prepare($sql);
			$check_query->execute(["id"=>$this->user_id]);
			// echo print_r($check_query->errorInfo());
			return $record = $check_query->fetch(PDO::FETCH_ASSOC);
		}
		public function partial_update($field,$value) {
			$sql = "UPDATE users
					SET	{$field} = :input
					WHERE id = :id";
			$insert_query = PDO::prepare($sql);
			$insert_query->execute(['input'=>$value,'id'=>$this->user_id]);
			if ($insert_query ->errorCode() == 0) return;
			$error = $insert_query->errorInfo();
			print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
			return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
		}
		 
		
	}
?>