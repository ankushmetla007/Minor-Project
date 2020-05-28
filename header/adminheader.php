<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en" dir="ltr">
  <head>
      
    <meta charset="utf-8">
    <title>Admin Portal</title>
    <link rel="stylesheet" href="./css/teacherpagestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    
<script src="js/form-submit.js"></script>
  </head>
  <body>

    <script language="javascript">
        function confirmlink(link) {
        if ( confirm("Are you sure you want to log out?")){
           <?php session_destroy();
            session_unset();?>
            window.location = "file:///C:/Users/Ankush/Desktop/Website%20Allocation/Frontpage.html";
        }
        
        }
    </script>

    <input type="checkbox" id="check">

    <nav class="navbar navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="./index.php"><img src="img/Ansallogo.png" height="80" width="250"></a>
            <div class="left_area">
                <h3>ADMIN <span>PORTAL</span></h3>
            </div>
            <div class="navbar-right">
                <div class="Save-and-continue-later"><a role="button" href="./index.php" name="Action:Save and continue later" type="submit" onclick="return confirmlink()" class="btn btn-default logout_btn" id="loading" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Logging off">Logout</a></div>
            </div> 
        </div>
    </nav>
    
    <div class="sidebar">
        <center>
            <img src="./img/1.png" class="profile_image" alt="">
            <h4>admin</h4>
        </center>
    </div> 