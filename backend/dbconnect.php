<?php
Class dbObj{
	/* Database connection start */
	public $hostname = "localhost";
	public $username = "root";
	public $password = "";
	public $dbname = "ansal_project_allocation";
	public $conn;
	function getConnstring() {
		$con = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());

		/* check connection */
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		} else {
			$this->conn = $con;
		}
		return $this->conn;
	}
}

?>