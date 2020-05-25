<?php
session_start();
//include connection file 
include_once("dbconnect.php");
class Student {
	protected $conn;
	protected $data = array();
	function __construct($connString) {
		$this->conn = $connString;
	}
	
	function login() {
		
			$user_name = trim($_POST['username']);
            $user_password = md5(trim($_POST['password']));
            $role = trim($_POST['role']);
			$sql = "SELECT * FROM users WHERE user_name='".$user_name."' AND password='".$user_password."' AND role='".$role."'";
			//echo $sql;
			$resultset = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
			while($row = mysqli_fetch_assoc($resultset)){
				if($row){
					echo $role;
					$_SESSION['user_session'] = $row['user_name'];
					$_SESSION['user_id'] = $row['ID'];
				} else {
					echo "Ohhh ! Wrong Credential."; // wrong details
				}
			}
			
		
    }
    
    function signup() {
		
			$user_name = trim($_POST['username']);
            $user_password = md5(trim($_POST['password']));
            $phone_number = trim($_POST['phone_number']);
            $roll_number = trim($_POST['roll_number']);
            $email = trim($_POST['emailid']);
            $branchname = trim($_POST['branchname']);
            $sql = "INSERT INTO users (user_name, password, role) VALUES ('".$user_name."', '".$user_password."', 'student')";
			if (mysqli_query($this->conn, $sql)) {
				// echo "1";
				$sql2 = "INSERT INTO students (ID, std_name, roll_number, contact, emailid, branchname) 
				VALUES ('".$this->conn->insert_id."','".$user_name."', '".$roll_number."', '".$phone_number."', '".$email."', '".$branchname."')";
            if (mysqli_query($this->conn, $sql2)) {
				echo "1";
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
			  }
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
			  }
			  
		
	}

    function addproject() {	
		$project_title = trim($_POST['pname']);
		$subject_name = trim($_POST['sname']);      
		$sql = "INSERT INTO projects (project_title,subject_name) VALUES ('".$project_title."', '".$subject_name."')";
		if (mysqli_query($this->conn, $sql)) {
			echo "1";
		  } else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		  }
	}

	function addteacher() {
		$user_name = trim($_POST['username']);
		$user_password = md5(trim($_POST['password']));
		$phone_number = trim($_POST['phone_number']);
		$email = trim($_POST['emailid']);
		$sql = "INSERT INTO users (user_name, password, role) VALUES ('".$user_name."', '".$user_password."', 'teacher')";
		$sql2 = "INSERT INTO teachers (name, contact, email) 
			VALUES ('".$user_name."', '".$phone_number."', '".$email."')";
		if (mysqli_query($this->conn, $sql)) {
			// echo "1";	
		if (mysqli_query($this->conn, $sql2)) {
			echo "1";
		  	} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		  	}
		  } else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		}
		  
	}

	function allocateProject() {
		$student_id = trim($_POST['student_id']);
		$teacher_id = trim($_POST['teacher_id']);
		$project = trim($_POST['project'])?trim($_POST['project']):trim($_POST['projectname']);
		$sql = "INSERT INTO projectallocate (project_title, teacher_id, student_id) VALUES ('".$project."', '".$teacher_id."', '$student_id')";
		if (mysqli_query($this->conn, $sql)) {
		 	echo "1";	
		  } else {
			echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
		}
		  
	}
	
}
$db = new dbObj();
$connString =  $db->getConnstring();
$stdCls = new Student($connString);
$params = $_REQUEST;
$action = $params['action'] !='' ? $params['action'] : '';


switch($action) {
 case 'login':
	$stdCls->login();
 break;
 case 'signup':
	$stdCls->signup();
 break;
 case 'addproject':
	$stdCls->addproject();
 break;
 case 'addteacher':
	$stdCls->addteacher();
 break;
 case 'allotProject':
	$stdCls->allocateProject();
 break;
 default:
 return;
}