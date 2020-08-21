<?php
	// echo "Db connect linked!";
/*
*This class connects to a remote mysql database on remotemysql.com
*change the details if you wish to change to localhost
*/
	class DbConnect extends PDO {
		private function local_conn() {
			$host = "remotemysql.com";
			$db_name = '3vOS7K3O7v';
			$user_name = "3vOS7K3O7v";
			$password = "hKSP0tCy8V";
			$dsn;
		}
		private $host = "remotemysql.com";
		private $db_name = '3vOS7K3O7v';
		private $user_name = "3vOS7K3O7v";
		private $password = "hKSP0tCy8V";
		private $dsn;
		private function remote_db_conn () {
			private $host = "remotemysql.com";
			private $db_name = '3vOS7K3O7v';
			private $user_name = "3vOS7K3O7v";
			private $password = "hKSP0tCy8V";
			private $dsn;
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
			if ($_SERVER['HTTP_HOST'] !== 'localhost') {
				$this->remote_db_conn();
			}else {
				$this->local_conn();
			}
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