<?php 

	class connMySqlDB {
		private $host = "localhost";
		private $user = "root";
		private $password = "";
		private $db_name = "test";

		private $db;

		public function __construct() {
			$this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->db_name, $this->user, $this->password);
		}
	}

?>