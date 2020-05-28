<?php 
// session_start();
include('./header/teacherheader.php');
include('./functions.php');
$db = new dbObj();
$connString =  $db->getConnstring();
$rspCls = new Getdata($connString);
$branchname = $_GET['branchname'];
$getStudents = $rspCls->getStudents($branchname);
$getProjects = $rspCls->getProjects();
$_SESSION['user_id'];

?>
      <div class="content">
         <div class="container">
            <div class="row row-content">
               <div class="col-6 offset-2">
                  <div class="card">
                     <h3 class="card-header bg-danger text-white">Projects List</h3>
                     <div class="card-body bg-light">
                        <pre><font size="3px">View and add projects</font>             <a class="btn btn-danger text-white" href="./teacherpage3.php">Projects</a></pre>
                     </div>
                  </div>
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
                                            <th class="cell100 column1">Student Name</th>
                                            <th class="cell100 column2">Roll No.</th>
                                            <th class="cell100 column3">Phone No.</th>
                                            <th class="cell100 column4">Project Alloted</th>
                                            <th class="cell100 column5">Allot Project</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
        
                            <div class="table100-body js-pscroll">
                                <table>
                                    <tbody>
                                    <?php $s_no = 0;
                                    if(is_array($getStudents)){
                                        foreach ($getStudents as $stud) {   
                                            $s_no++;
                                            echo ' <tr class="row100 body">
                                            <td class="cell100 column1">'.$stud["std_name"].'</td>
                                            <td class="cell100 column2">'.$stud["roll_number"].'</td>
                                            <td class="cell100 column3">'.$stud["contact"].'</td>
                                            <td class="cell100 column4">'.$stud["project_title"].'</td>';
                                            if($stud["project_title"] == "" || $stud["project_title"] == NULL) {
                                             echo '<td class="cell100 column5">
                                            <button data-id="'.$stud["ID"].'" type="button" class="open-AddBookDialog btn btn-danger" data-toggle="modal" data-target="#myModal">
                                                Allot Project
                                            </button>
                                            </td>';
                                            } else
                                            echo '<td class="cell100 column5"></td>
                                            
                                        </tr>';
                                        
                                            
                                        }
                                    } else {
                                        echo ' <tr class="row100 body">
                                            <td class="cell100 column1" colspan=5>No record found.</td>
                                            </tr>';
                                    }
                                        ?>

                                        <!-- The Modal -->
                                        <div class="modal fade" id="myModal">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                    <h4 class="modal-title">Allot Project</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <form id="allotProject" method="post" name="allotProject">
                                                            <div class="row row-content">
                                                                <div class="col-11">
                                                                    <div class="input-group form-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"><i class="fas fa-book"></i></span>
                                                                            <input type="hidden" name="student_id" id="student_id" value="">
                                                                            <input type="hidden" name="teacher_id" id="teacher_id" value="<?php echo $_SESSION['user_id']?>">
                                                                            <select style="width : 350px;" class="form-control" name="project" id="allocate_project" required>
                                                                            <option value="" disabled selected hidden>Select Project</option>
                                                                           <?php if(is_array($getProjects)){
                                                                                foreach ($getProjects as $proj) {
                                                                                echo '<option name="projectname" value="'.$proj["project_title"].'">
                                                                                '.$proj["project_title"].'</option>';
                                                                                    
                                                                                }
                                                                            }
                                                                            ?>
                                                                                
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-1">
                                                                    <button type="submit" name="project-allot" id="project-allot" tabindex="4" 
                                                                    class="btn btn-primary float-right login_btn">
                                                                        <span class="spinner"><i class="fa fa-check fa-lg"></i></i></span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>


                                                    </div>
                                                    
                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </div>
                                                    
                                                </div>
                                                </div>
                                            </div>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
         </div>
      </div>
      <!-- <a class="btn btn-primary text-white">Allot</a> -->
<script>
function setTeacherID(){
//document.getElementById("teacher_id")value = value;

var name_value = $('#allocate_project option:selected');
var name = $.trim(name_value);
var namte_attribute = $(this).find('option:selected').attr("name");
$("#teacher_id").val(name);
console.log(JSON.stringify(name));
console.log(namte_attribute);
}

$(document).on("click", ".open-AddBookDialog", function () {
     var student_id = $(this).data('id');
     $("#student_id").val(student_id);
    //  $(".modal-body #r=student_id").val( student_id );
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});



$('#allotProject').on('submit', function (e) {
        e.preventDefault();
        console.log('form submit called');
        var data = $("#allotProject").serialize();
        console.log(data);
        $.ajax({				
            type : 'POST',
            url  : 'backend/response.php?action=allotProject',
            data : data,
            beforeSend: function(){	
                $("#error").fadeOut();
                $("#project-allot").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; alloting ...');
            },
            success : function(response){	
                console.log("response from response page is:" +response);		
                if($.trim(response) === "1"){
                    alert('project successfully allocated');									
                    $("#sproject-allot").html('Alloting ...');
                    setTimeout(' window.location.href = "<?php echo $_SERVER['REQUEST_URI'];?>"  ',2000);
                } else {
                    console.log("Error is:" +response);
                    alert("User not found Please Register yourself");									
                    $("#error").fadeIn(1000, function(){						
                        $("#error").html(response).show();
                    });
                }
            }
        });
        return false;
    })
</script>
<?php include('./footer/footer.php');