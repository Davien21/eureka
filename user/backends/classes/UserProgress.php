<?php
	/**
	 * This Class is responsible for tracking the state of users on the app 
	 *in case they need to resume an activity, like registration or setups
	 * See Chidiebere Ekennia for reference
	 */
	class UserProgress extends DBConnect
	{
		public function __construct ($id) {
			parent::__construct();
			$this->user_id = $id;
		}
		public function __toString () {
			return "Name: ".__CLASS__."<br>This Object allows you to track or update the user's progress on setups and/or tutorials";
		}
		public function get_user_progress()	{
			$sql = "SELECT * 
					FROM user_progress
					WHERE user_id = :id";
			$check_query = PDO::prepare($sql);
			$check_query->execute(["id"=>$this->user_id]);
			// echo print_r($check_query->errorInfo());
			return $record = $check_query->fetch(PDO::FETCH_ASSOC);
		}
		public function add_user_progress($view,$extra_details=false) {
			$sql = "INSERT INTO user_progress(user_id,view,extra_details)
					VALUES(:user_id,:view,:extra_details)";
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute([
					'user_id'=>$this->user_id,'view'=>$view,'extra_details'=>$extra_details
				]);
			if ($insert_query ->errorCode() == 0) return;
			$error = $insert_query->errorInfo();
			// print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
			return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
		}
		public function update_user_progress($view,$extra_details=false) {
			$sql = "UPDATE user_progress
					SET	view = :view, extra_details = :extra_details
					WHERE user_id = :id";
			$insert_query = PDO::prepare($sql);
			$insert_query -> 
				execute([
					'view'=>$view,'extra_details'=>$extra_details,'id'=>$this->user_id
				]);
			if ($insert_query ->errorCode() == 0) return;
			$error = $insert_query->errorInfo();
			// print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
			return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
		}
		public function update_quiz_number ($id) {
			$sql = "
				UPDATE quiz_list
				SET  question_count = question_count + 1
				WHERE quiz_status = 'unscheduled' AND id = :id AND status = 'enabled';
			";
			$update_query = PDO::prepare($sql);
			$update_query -> execute(['id'=>$id]);
			if ($update_query ->errorCode() == 0) {
				return ['data'=>'','status'=>true, 'message'=>"Updated quiz count Successfully"];
			}
			else {
				$error = $update_query->errorInfo();
				print_r(['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ]);
				return ['data'=>'','status'=>false, 'message'=>"There was an error - " . $error[2] ];
			}
		}
		 
		 
		
	}
?>