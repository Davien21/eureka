<?php
	// echo "Db connect linked!";
	class DbConnect extends PDO {
		private function heroku_db_conn () {
			if ($_SERVER['HTTP_HOST']==='eureka-hms.herokuapp.com') {
				private $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
				// $conn_type = 'heroku';
				private $heroku_host = $this->$url["host"];
				private $heroku_user_name = $this->$url["user"];
				private $heroku_password = $this->$url["pass"];
				private $heroku_db_name = substr($this->$url["path"], 1);
			}else {
				// $conn_type = 'local';
			}
		}

		// $conn = new mysqli($server, $username, $password, $db);

		private $host = "localhost";
		private $db_name = 'eureka';
		private $user_name = "root";
		private $password = "";
		private $dsn;
		public function getDbname () {
			return $this->db_name;
		}
		public function __construct () {
			try {
				if ($_SERVER['HTTP_HOST']==='eureka-hms.herokuapp.com') {
					$this->heroku_db_conn();

					$dsn = "mysql:host=".$this->heroku_host.";dbname=".$this->heroku_db_name;
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