<?php
	// echo "Db connect linked!";
	class DbConnect extends PDO {
		private $host = "localhost";
		private $db_name = 'eureka';
		private $user_name = "root";
		private $password = "";
		private $dsn;
		private function heroku_db_conn () {
			if ($_SERVER['HTTP_HOST']==='eureka-hms.herokuapp.com') {
				$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
				// $conn_type = 'heroku';
				$this->host = $$url["host"];
				$this->user_name = $$url["user"];
				$this->password = $$url["pass"];
				$this->db_name = substr($$url["path"], 1);
			}else {
				// $conn_type = 'local';
			}
		}

		// $conn = new mysqli($server, $username, $password, $db);

		public function getDbname () {
			return $this->db_name;
		}
		public function __construct () {
			try {
				if ($_SERVER['HTTP_HOST']==='eureka-hms.herokuapp.com') {
					$this->heroku_db_conn();
					$dsn = "mysql:host=".$this->host.";dbname=".$this->db_name;
					echo "Connected to heroku Database successfully"."<br>";
				}else {
					$dsn = "mysql:host=".$this->host.";dbname=".$this->db_name;
					echo "Connected to local Database successfully"."<br>";
				}
				parent::__construct($dsn,$this->user_name,$this->password);
			}catch (Exception $e) {
				echo "Error - ".$e->getMessage();
			}
		}

		

	}
	
?>