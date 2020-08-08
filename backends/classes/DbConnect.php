<?php
	// echo "Db connect linked!";
	class DbConnect extends PDO {
		private $host = "localhost";
		private $db_name = 'eureka';
		private $user_name = "root";
		private $password = "";
		private $dsn;
		private function heroku_db_conn () {
			$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
			print_r($url);
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
				if ($_SERVER['HTTP_HOST']==='eureka-hms.herokuapp.com') {
					$this->heroku_db_conn();
					echo "Connected to heroku Database successfully"."<br>";
				}else {
					$dsn = "mysql:host=".$this->host.";dbname=".$this->db_name;
					echo "Connected to local Database successfully"."<br>";
					parent::__construct($dsn,$this->user_name,$this->password);
				}
			}catch (Exception $e) {
				echo "Error - ".$e->getMessage();
			}
		}

		

	}
	
?>