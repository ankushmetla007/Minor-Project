<?php
//include connection file 
include_once("dbconnect.php");
class Student {
	protected $conn;
	protected $data = array();
	function __construct($connString) {
		$this->conn = $connString;
	}
	
	function login() {
		if(isset($_POST['login-submit'])) {
			$user_name = trim($_POST['username']);
            $user_password = trim($_POST['password']);
            $role = trim($_POST['role']);
			$sql = "SELECT *  FROM users WHERE user_name='$user_name' AND passowrd='$user_password' AND role='$role'";
			$resultset = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
			$row = mysqli_fetch_assoc($resultset);
			if(md5($user_password) == $row['password']){
				echo "1";
				$_SESSION['user_session'] = $row['user'];
			} else {
				echo "Ohhh ! Wrong Credential."; // wrong details
			}
		}
    }
    
    function signup() {
		if(isset($_POST['signup-submit'])) {
			$user_name = trim($_POST['username']);
            $user_password = trim($_POST['password']);
            $phone_number = trim($_POST['phone_number']);
            $roll_number = trim($_POST['roll_number']);
            $course = trim($_POST['course']);
            $year_or_sem = trim($_POST['year_or_sem']);
            $sql = "INSERT INTO users (user_name, password, role) VALUES ($user_name, $user_password, 'student')";
            if (mysqli_query($this->conn, $sql)) {
                echo "1";
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
              }
		}
	}
}
$db = new dbObj();
$connString =  $db->getConnstring();

$params = $_REQUEST;
$action = $params['action'] !='' ? $params['action'] : '';
$stdCls = new Student($connString);

switch($action) {
 case 'login':
	$stdCls->login();
 break;
 case 'signup':
	$stdCls->signup();
 break;
 default:
 return;
}