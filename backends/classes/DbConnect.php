<?php
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
			$host = getenv('remote_db_host');
			$db = getenv('remote_db');
			$user = getenv('remote_db');
			$pass = getenv('remote_db_pass');
			$dsn = "mysql:host=".$host.";dbname=".$db;
			return $conn = ['dsn'=>$dsn,'user'=>$user,'pass'=>$pass];
		}
		protected function __construct () {
			try {
				if (!strstr($_SERVER['HTTP_HOST'], 'localhost') ) {
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