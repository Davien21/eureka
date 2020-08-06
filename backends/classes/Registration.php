<?php
	/**
	 * This Class is responsible for any and all registration activities on the app
	 */
	class Registration extends DBConnect
	{
		
		public function unique_hospital_id () {
			$possibles = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
			$unique_id = substr(str_shuffle($possibles),0, 10); 
			$sql = "SELECT 1 
					FROM hospital_list 
					WHERE unique_id = :unique_id";
			$check_query = PDO::prepare($sql);
			$check_query->execute(['unique_id'=>$unique_id]);
			// echo print_r($check_query->errorInfo());
			$isExisting = $check_query->fetchColumn();
			if ($isExisting) $this->unique_hospital_id();
			else return $unique_id;
		}
	}

?>