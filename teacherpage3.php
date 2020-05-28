<?php include('./header/teacherheader.php');
include('./functions.php');
$db = new dbObj();
$connString =  $db->getConnstring();
$rspCls = new Getdata($connString);
$getProjects = $rspCls->getProjects();
// echo '<div style="padding-left:300px;padding-top:250px;">';
// var_dump($getProjects);
// echo '</div>';
?>

      <script>  
        function addnew(){
            $(document).ready(function(){
            var pname = prompt("Please enter the project name");
            var sname = prompt("Please enter the subject name");
            var tableRef = document.getElementById('myTable').getElementsByTagName('tbody')[0];

            
            var data = pname;
            console.log(data);
            $.ajax({				
                type : 'POST',
                url  : 'backend/response.php?action=addproject',
                data : {'pname':pname,'sname':sname},
                beforeSend: function(){	
                    $("#error").fadeOut();
                    $("#signup-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
                },
                success : function(response){	
                    console.log("response from response page is:" +response);		
                    if($.trim(response) === "1"){
                        console.log('Project added successfully');									
                        var newRow = tableRef.insertRow(tableRef.rows.length);
                        console.log(tableRef.rows.length);
                        var rownumber = tableRef.rows.length - 1;
                        console.log(rownumber);
                        var newRownum = rownumber +1;
                        var myHtmlContent = '<td class="cell100 column11">'+ newRownum +'</td>'+
                                            '<td class="cell100 column22">'+pname+'</td>';
                        newRow.innerHTML = myHtmlContent;
                    } else {
                        console.log("Error is:" +response);
                        alert("User not found Please Register yourself");									
                        $("#error").fadeIn(1000, function(){						
                            $("#error").html(response).show();
                        });
                    }
                }
            });
            

            // Insert a row in the table at the last row
            //var newRow   = tableRef.insertRow();

            // Insert a cell in the row at index 0
            //var newCell  = newRow.insertCell(0);

            // Append a text node to the cell
            // var newText  = document.createTextNode(pname);
            
           // newCell.appendChild(myHtmlContent);
            // newCell.appendChild(newText);
        
        })}
      </script>
  

      <div class="content">
         <div class="container">
            <div class="row row-content">
                <div class="col-3 offset-4">
                    <a class="btn btn-danger text-white" onclick="addnew()">Add New Project</a>
                </div>
            </div>
            <div class="row row-content">
                <div class="limiter">
                    <div class="wrap-table100">
                        <div class="table100 ver1 m-b-110">
                            <div class="table100-head">
                                <table>
                                    <thead>
                                        <tr class="row100 head">
                                            <th class="cell100 column11">S.No</th>
                                            <th class="cell100 column22">Project Title</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
        
                            <div class="table100-body js-pscroll">
                                <table id="myTable">
                                    <tbody>
                                        <?php $s_no = 0;
                                        if(is_array($getProjects)){
                                        foreach ($getProjects as $proj) {
                                            $s_no++;
                                        echo ' <tr class="row100 body">
                                            <td class="cell100 column11">'.$s_no.'</td>
                                            <td class="cell100 column22">'.$proj["project_title"].'</td>
                                        </tr>';
                                            
                                        }
                                    } else{
                                        echo ' <tr class="row100 body">
                                        <td class="cell100 column11" rowspan="2>Record not found</td>
                                    </tr>';
                                    }
                                        ?>
                                                                          
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
         </div>
      </div>
      <footer class="footer" id="contactus">
        <div class="container">
            <div class="row">             
                <div class="col-7 offset-sm-2 col-sm-4">
                    <h5>Our Address</h5>
                    <address>
		              Ansal University<br>
		              Golf Course Road<br>
                      Huda, Sushant Lok 2<br>
                      Sector 55, Gurugram<br>
                      Haryana - 122003<br>
		              <i class="fa fa-phone fa-lg"></i>: +91 8888888888<br>
		              <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:ansal@ansaluniversity.edu.in">ansal@ansaluniversity.edu.in</a>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope fa-lg"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2020 Ansal University</p>
                </div>
           </div>
        </div>
    </footer>

<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

  </body>
</html>