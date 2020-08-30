<?php
	/**
	 * This Class is responsible for all logins on this App
	 * See Chidiebere Ekennia for reference
	 */
	class HospitalSetting extends DBConnect
	{
		public function __construct ($user_id) {
			parent::__construct();
			$this->user_id = $user_id;
		}
		public function __toString () {
			return "Name: ".__CLASS__.
				"<br>This Object allows you to perform CRUD operations on a hospital's settings";
		}
		public function get_all_hospital_ids($user_id)	{
			$sql = "SELECT id
					FROM hospitals
					WHERE director_id = :user_id";
			$check_query = PDO::prepare($sql);
			$check_query->execute([":user_id"=>$user_id]);
			// echo print_r($check_query->errorInfo());
			return $record = $check_query->fetchAll(PDO::FETCH_ASSOC);
		}
		public function get_hospital_profile($hospital_id)	{
			$sql = "SELECT * 
					FROM hospitals
					WHERE id = :id";
			$check_query = PDO::prepare($sql);
			$check_query->execute(["id"=>$hospital_id]);
			// echo print_r($check_query->errorInfo());
			return $record = $check_query->fetch(PDO::FETCH_ASSOC);
		}
		public function get_hospital_settings()	{
			$sql = "SELECT * 
					FROM hospital_settings
					WHERE id = :id";
			$check_query = PDO::prepare($sql);
			$check_query->execute(["id"=>$this->user_id]);
			// echo print_r($check_query->errorInfo());
			return $record = $check_query->fetch(PDO::FETCH_ASSOC);
		}
		public function check_if_in_db ($input) {
			$sql = "SELECT 1 FROM {$this->table}
					WHERE hospital_id = :input"; 
			$check_query = PDO::prepare($sql);
			$check_query->execute([':input'=>$input]);
			// print_r($check_query->errorInfo());
			$is_existing_setting = $check_query->fetchColumn();
			if (!$is_existing_setting) return;
			return [
				'status'=>true,
				'message'=>"This Hospital's settings have already been defined.<br>Consider updating them instead."
			];
		}
		public function add_settings($hospital_id,$patient_ms,$finance_ms,$activity_ms) {
			$is_existing_setting = $this->check_if_in_db ($hospital_id);
			if (!empty($is_existing_setting)) return $is_existing_setting['message'];
			$sql = "INSERT INTO {$this->table}(hospital_id,patient_ms,finance_ms,activity_ms)
					VALUES(:hospital_id,:patient_ms,:finance_ms,:activity_ms)";
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute([
					'hospital_id'=>$hospital_id,'patient_ms'=>$patient_ms,
					'finance_ms'=>$finance_ms,'activity_ms'=>$activity_ms,
				]);
			if ($insert_query ->errorCode() == 0) return;
			$error = $insert_query->errorInfo();
			// print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
			return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
		}
		 
		
	}
?>