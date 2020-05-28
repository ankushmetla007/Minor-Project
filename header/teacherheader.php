<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en" dir="ltr">
  <head>
      
    <meta charset="utf-8">
    <title>Faculty Portal</title>
    <link rel="stylesheet" href="./css/teacherpagestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
   
  </head>
  <body>
    <script language="javascript">
        function confirmlink(link) {
        if ( confirm("Are you sure you want to log out?"))
        window.location = "";
        }
    </script>

    <input type="checkbox" id="check">

    <nav class="navbar navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="./index.php"><img src="img/Ansallogo.png" height="80" width="250"></a>
            <div class="left_area">
                <h3>FACULTY <span>PORTAL</span></h3>
            </div>
            <div class="navbar-right">
                <div class="Save-and-continue-later"><a role="button" href="./index.php" name="Action:Save and continue later" type="submit" onclick="return confirmlink()" class="btn btn-default logout_btn" id="loading" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Logging off">Logout</a></div>
            </div> 
        </div>
    </nav>
    
    <div class="sidebar">
      <center>
        <img src="./img/1.png" class="profile_image" alt="">
        <h4><?php echo $_SESSION['user_session'] ?></h4>
      </center>
      
       
      <div class="sidenav" id='cssmenu'>
        <ul>
           <li><a href='#'><span>B.Tech - CSE</span></a>
              <ul>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=CSE-1'><span>1st Year</span></a></li>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=CSE-2'><span>2nd Year</span></a></li>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=CSE-3'><span>3rd Year</span></a></li>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=CSE-4'><span>4th Year</span></a></li>
              </ul>
           </li>
           <li><a href='#'><span>B.Tech - ME</span></a>
              <ul>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=ME-1'><span>1st Year</span></a></li>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=ME-2'><span>2nd Year</span></a></li>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=ME-3'><span>3rd Year</span></a></li>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=ME-4'><span>4th Year</span></a></li>
              </ul>
           </li>
           <li><a href='#'><span>B.Tech - ECE</span></a>
              <ul>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=ECE-1'><span>1st Year</span></a></li>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=ECE-2'><span>2nd Year</span></a></li>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=ECE-3'><span>3rd Year</span></a></li>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=ECE-4'><span>4th Year</span></a></li>
              </ul>
           </li>
           <li><a href='#'><span>B.Tech - EEE</span></a>
              <ul>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=EEE-1'><span>1st Year</span></a></li>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=EEE-2'><span>2nd Year</span></a></li>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=EEE-3'><span>3rd Year</span></a></li>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=EEE-4'><span>4th Year</span></a></li>
              </ul>
           </li>
           <li><a href='#'><span>B.Tech - CE</span></a>
              <ul>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=CE-1'><span>1st Year</span></a></li>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=CE-2'><span>2nd Year</span></a></li>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=CE-3'><span>3rd Year</span></a></li>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=CE-4'><span>4th Year</span></a></li>
              </ul>
           </li>
           <li><a href='#'><span>B.Tech - Cyber-Security</span></a>
              <ul>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=CBS-1'><span>1st Year</span></a></li>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=CBS-2'><span>2nd Year</span></a></li>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=CBS-3'><span>3rd Year</span></a></li>
                 <li class='has-sub'><a href='./teacherpage2.php?branchname=CBS-4'><span>4th Year</span></a></li>
              </ul>
           </li>
           
        </ul>
        </div>
        
      </div>