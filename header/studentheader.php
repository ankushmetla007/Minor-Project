<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      
    <meta charset="utf-8">
    <title>Student Portal</title>
    <link rel="stylesheet" href="./css/teacherpagestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    
  </head>
  <body>
    <script language="javascript">
        function confirmlink(link) {
        if ( confirm("Are you sure you want to log out?"))
        window.location = "file:///C:/Users/Ankush/Desktop/Website%20Allocation/Frontpage.html";
        }
    </script>

    <input type="checkbox" id="check">

    <nav class="navbar navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="./index.php"><img src="img/Ansallogo.png" height="80" width="250"></a>
            <div class="left_area">
                <h3>STUDENT <span>PORTAL</span></h3>
            </div>
            <div class="navbar-right">
                <div class="Save-and-continue-later"><a role="button" href="./index.php" name="Action:Save and continue later" type="submit" onclick="return confirmlink()" class="btn btn-default logout_btn" id="loading" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Logging off">Logout</a></div>
            </div> 
        </div>
    </nav>
    
    <div class="sidebar">
        <center>
            <img src="./img/1.png" class="profile_image" alt="">
            <h4>NAME OF STUDENT</h4>
        </center>
        <!-- <div id='cssmenu'>
            <ul>
                <li><a href='#'><span>View Project</span></a>
                </li>
                <li><a href='#'><span>Change Project</span></a>
                </li>  
            </ul>   
        </div> -->
    </div>  