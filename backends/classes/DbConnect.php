<?php
	// echo "Db connect linked!";
	class DbConnect extends PDO {
		// $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

		// $server = $url["host"];
		// $username = $url["user"];
		// $password = $url["pass"];
		// $db_name = substr($url["path"], 1);

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
				$dsn = "mysql:host=".$this->host.";dbname=".$this->db_name;
				parent::__construct($dsn,$this->user_name,$this->password);
			
				// echo "Connected to Database successfully"."<br>";
			}catch (Exception $e) {
				echo "Error - ".$e->getMessage();
			}
		}

		

	}
	
?>