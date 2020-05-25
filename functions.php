<?php
session_start();
//include connection file 
include_once("./backend/dbconnect.php");
class Getdata {
    protected $conn;
    public $projectbuffer   = array();
    public $studentbuffer   = array();
    public $teacherbuffer   =   array();
    public $stdprojectbuffer   =  array();
	protected $data = array();
	function __construct($connString) {
		$this->conn = $connString;
	}
	
	function getProjects() {
            $sql = "SELECT * FROM projects";
			$resultset = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
            // Fetch data to temporary projectbuffer:
            while ($row = mysqli_fetch_assoc($resultset)){
                $this->projectbuffer[] = $row;
            }

            // Free result set:
            $resultset->free();

            // Return projectbuffer to global scope:
            if($this->projectbuffer)
                return $this->projectbuffer;
            else {
                return "";
				// echo "Ohhh ! Wrong Credential."; // wrong details
			}
		
    }

    // get teachers method for displaying teacher list
    function getTeachers() {
        $sql = "SELECT * FROM teachers";
        $resultset = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
        // Fetch data to temporary projectbuffer:
        while ($row = mysqli_fetch_assoc($resultset)){
            $this->teacherbuffer[] = $row;
        }

        // Free result set:
        $resultset->free();

        // Return projectbuffer to global scope:
        if($this->teacherbuffer)
            return $this->teacherbuffer;
        else {
            echo "Ohhh ! Wrong Credential."; // wrong details
        }
    }

    function getstudents($name) {
        $branchname = $name;
        $sql = "SELECT students.*, projectallocate.project_title FROM students LEFT OUTER JOIN projectallocate ON students.ID=projectallocate.student_id where students.branchname = '".$branchname."' ORDER BY projectallocate.project_title";
        echo $sql;
        $resultset = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
        // Fetch data to temporary studentbuffer:
        while ($row = mysqli_fetch_assoc($resultset)){
            $this->studentbuffer[] = $row;
        }

        // Free result set:
        $resultset->free();

        // Return projectbuffer to global scope:
        if($this->studentbuffer)
            return $this->studentbuffer;
        else {
            return "Ohhh ! Wrong Credential."; // wrong details
        }
    }
    
    function signup() {
		
			$user_name = trim($_POST['username']);
            $user_password = trim($_POST['password']);
            $phone_number = trim($_POST['phone_number']);
            $roll_number = trim($_POST['roll_number']);
            $course = trim($_POST['course']);
            $year_or_sem = trim($_POST['year_or_sem']);
            $sql = "INSERT INTO users (user_name, password, role) VALUES ('".$user_name."', '".$user_password."', 'student')";
            if (mysqli_query($this->conn, $sql)) {
                echo "1";
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

    function getStudentProjects() {
        echo $_SESSION['user_id'];
        $sql = "SELECT project_title FROM projectallocate where student_id = '".$_SESSION['user_id']."'";
        echo $sql;
        $resultset = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
        // Fetch data to temporary projectbuffer:
        while ($row = mysqli_fetch_assoc($resultset)){
            $this->stdprojectbuffer[] = $row;
        }

        // Free result set:
        $resultset->free();

        // Return projectbuffer to global scope:
        if($this->stdprojectbuffer)
            return $this->stdprojectbuffer;
        else {
            echo "Ohhh ! Wrong Credential."; // wrong details
        }
    }

                   
}




