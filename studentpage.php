<?php 
session_start();
include('./header/studentheader.php');
include('./header/teacherheader.php');
include('./functions.php');
$db = new dbObj();
$connString =  $db->getConnstring();
$rspCls = new Getdata($connString);
$getStudentProjects = $rspCls->getStudentProjects();
var_dump($getStudentProjects);
echo $_SESSION['user_id'];
?>
    <div class="content">
        <div class="container">
            <div class="row row-content">
                <div class="col-3 offset-3">
                    <!-- <a class="btn btn-danger text-white" onclick="addnew()">Request to Change Project</a> -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                        Request to Change Project
                    </button>
                    
                      <!-- The Modal -->
                      <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                          <div class="modal-content">
                          
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Request to Change Project</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                                <form>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-book"></i></span>
                                        </div>
                                        <input type="text" name="subjectname" id="subjectname"  class="form-control" placeholder="subjectname" required>	
                                    </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-font"></i></span>
                                        </div>
                                        <textarea name="change" id="change" class="form-control" placeholder="Why do you want to change the project"></textarea>
                                    </div>
                                    <button type="submit" name="submit" id="submit" tabindex="4" 
                                    class="btn btn-primary float-right login_btn">
                                         <span class="spinner"><i class="icon-spin icon-refresh" id="spinner"></i></span> Submit Request
                                    </button>
                                </form>
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                            
                          </div>
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
                                            <th class="cell100 column11">S. No.</th>
                                            <th class="cell100 column22">Project Title</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
        
                            <div class="table100-body js-pscroll">
                                <table id="myTable">
                                    <tbody>
                                        <!-- <tr class="row100 body">
                                            <td class="cell100 column11">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                                        </tr>         -->
                                        <?php $s_no = 0;
                                            if(is_array($getStudentProjects)){
                                                foreach ($getStudentProjects as $stud) {   
                                                    $s_no++;
                                                    echo ' <tr class="row100 body">
                                                    <td class="cell100 column1">'.$s_no.'</td>
                                                    <td class="cell100 column4">'.$stud["project_title"].'</td>
                                                </tr>';
                                                
                                                    
                                                }
                                            } else {
                                                echo ' <tr class="row100 body">
                                                    <td class="cell100 column1" colspan=5>No record found.</td>
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
<?php include('./footer/studentfooter.php');?>
    