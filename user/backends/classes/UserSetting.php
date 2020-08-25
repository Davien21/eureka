<?php
	/**
	 * This Class is responsible for all logins on this App
	 * See Chidiebere Ekennia for reference
	 */
	class UserSetting extends DBConnect
	{
		public function __construct ($id) {
			parent::__construct();
			$this->user_id = $id;
		}
		public function __toString () {
			return "Name: ".__CLASS__."<br>This Object allows you to perform CRUD operations on a user's settings";
		}
		public function get_user_settings()	{
			$sql = "SELECT * 
					FROM hospital_settings
					WHERE id = :id
					AND status = 'enabled'";
			$check_query = PDO::prepare($sql);
			$check_query->execute(["id"=>$this->user_id]);
			// echo print_r($check_query->errorInfo());
			return $record = $check_query->fetch(PDO::FETCH_ASSOC);
		}
		 
		
	}
?>