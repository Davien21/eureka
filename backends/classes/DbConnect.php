<?php
	// echo "Db connect linked!";
/*
*This class connects to a remote mysql database on remotemysql.com
*change the details if you wish to change to localhost
*/
	class DbConnect extends PDO {
		private $host = "remotemysql.com";
		private $db_name = '3vOS7K3O7v';
		private $user_name = "3vOS7K3O7v";
		private $password = "hKSP0tCy8V";
		private $dsn;
		private function heroku_db_conn () {
			$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
			$server = $url["host"];
			$username = $url["user"];
			$password = $url["pass"];
			$db = substr($url["path"], 1);
			$dsn = "mysql:host=".$server.";dbname=".$db;

			parent::__construct($dsn,$username,$password);

			// $conn = new mysqli($server, $username, $password, $db);
			
		}
		public function getDbname () {
			return $this->db_name;
		}
		public function __construct () {
			try {
				$dsn = "mysql:host=".$this->host.";dbname=".$this->db_name;
				// echo "Connected to remote Database successfully"."<br>";
				parent::__construct($dsn,$this->user_name,$this->password);
			}catch (Exception $e) {
				echo "Error - ".$e->getMessage();
			}
		}

		

	}
	
?>