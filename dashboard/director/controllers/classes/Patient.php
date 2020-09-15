<?php
	/**
	 * This Class is responsible for all patient management
   * for directors on this App
   * 
	 * See Chidiebere Ekennia for reference
	**/
	class Patient extends DBConnect
	{
		public function __construct ($user_id) {
			parent::__construct();
      $this->user_id = $user_id;
		}
		public function __toString () {
			return "Name: ".__CLASS__.
				"<br>This Object allows you to perform CRUD operations on a patients";
		}
		public function isExisting(array $arr)	{
			$sql = "SELECT 1 FROM patients
					WHERE fname = :fname
					AND lname = :lname
					AND hospital_id = :hospital_id
					AND phone = :phone
					";
			$check_query = parent::prepare($sql);
			$check_query->execute([
				':hospital_id'=>$arr['hospital_id'],':fname'=>$arr['fname'],':lname'=>$arr['lname'],':phone'=>$arr['phone']
				
			]);
			return $is_existing = $check_query->fetchColumn();
		}
    public function addPatient(array $arr) {
			if( $this->isExisting($arr) ) 
				return ['message'=> "This patient has already been registered.
				<a class='my-2 d-block' href='#'>Click to See details</a>"];
			$sql = 
			"INSERT INTO 
				patients(hospital_id,fname,lname,address,phone,kin_name,kin_num)
			VALUES(:hospital_id,:fname,:lname,:address,:phone,:kin_name,:kin_num)";
			$insert_query = parent::prepare($sql);
			$insert_query -> execute([
				':hospital_id'=>$arr['hospital_id'],':fname'=>$arr['fname'],':lname'=>$arr['lname'],':address'=>$arr['address'],
				':phone'=>$arr['phone'],':kin_name'=>$arr['kin_name'],
				':kin_num'=>$arr['kin_num'],
			]);
			if ($insert_query ->errorCode() == 0) return false;
			$error = $insert_query->errorInfo();
			return [ 'data'=>'','status'=>false, 
				'message'=>"There was an error - " . $error[2] .
				"<br>Contact support and send a screenshot of this error" 
			];
    }
		public function getPatients() {
			# code...
		}
		 
		
  }
  
?>