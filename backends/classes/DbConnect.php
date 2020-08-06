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
			$host = $$url["host"];
			$user_name = $$url["user"];
			$password = $$url["pass"];
			$db_name = substr($$url["path"], 1);
			try {
				$dsn = "mysql:host=".$host.";dbname=".$db_name;
				$conn = new mysqli($host, $user_name, $password, $db_name);
			}catch (Exception $e) {
				echo "Error - ".$e->getMessage();
			}
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