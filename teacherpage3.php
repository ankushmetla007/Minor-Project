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

      <?php include('./footer/teacherfooter.php');