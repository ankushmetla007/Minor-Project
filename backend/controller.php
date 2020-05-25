<?php
session_start();
include 'dao.php';

$d = new dao();

if(isset($_POST['btn_login'])){
    extract($_POST);
    $username = $_POST['user_name'];
    $pswd = $_POST['pswd'];

    $sel = $d->select("users" , "email_id = '" . $username . "' AND password='" . $pswd . "'" ) or die('error from here');
    $result = mysqli_fetch_array($sel) ;

    if($result['email_id'] == $username && $result['password'] == $pswd){
        SESSION_START();
        $_SESSION['user_name'] = $result['email_id'];
        $_SESSION['message'] = 'Invalid Username Or Password';
        header("location:index.php");
    }
    else{
        $_SESSION['error'] = 'Invalid Username Or Password';
        // header("Location:login.php");
    }
}
?>