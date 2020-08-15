<?php
	// echo "Db connect linked!";
/*
*This class connects to a remote mysql database on remotemysql.com
*change the details if you wish to change to localhost
*/
	class DbConnect extends PDO {
		private function local_conn() {
			$host = "localhost";
			$user = "root";
			$pass = "";
			$dsn = "mysql:host=".$host.";dbname=eureka";
			return $conn = ['dsn'=>$dsn,'user'=>$user,'pass'=>$pass];
		}
		private function remote_db_conn () {
			$host = "remotemysql.com";
			$db = '3vOS7K3O7v';
			$user = "3vOS7K3O7v";
			$pass = "hKSP0tCy8V";
			$dsn = "mysql:host=".$server.";dbname=".$db;
			return $conn = ['dsn'=>$dsn,'user'=>$user,'pass'=>$pass];
		}
		public function __construct () {
			try {
				if ($_SERVER['HTTP_HOST'] !== 'localhost') {
					$conn = $this->remote_db_conn();
				}else {
					$conn = $this->local_conn();
				}
				parent::__construct($conn['dsn'],$conn['user'],$conn['pass']);
			}catch (Exception $e) {
				echo "Error - ".$e->getMessage();
			}
		}

		

	}
	
?>