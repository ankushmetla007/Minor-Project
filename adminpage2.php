<?php include('./header/adminheader.php');
include('./functions.php');
$db = new dbObj();
$connString =  $db->getConnstring();
$rspCls = new Getdata($connString);
$branchname = $_GET['branchname']?$_GET['branchname']:'CSE-1';
$getStudents = $rspCls->getStudents($branchname);
?>
    <div class="content">
        <div class="container">
            
            <!-- <div class="row row-content">
                <div class="col-2 offset-4">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal2">
                    Add Student
                </button> 
                </div>
            </div>                                  
             The Modal 
            <div class="modal fade" id="myModal2">
                <div class="modal-dialog">
                <div class="modal-content">
                
                    Modal Header 
                    <div class="modal-header">
                    <h4 class="modal-title">Add Student</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                     Modal body
                    <div class="modal-body">
                        <form id="addTeacher" name="addTeacher" role="form" action="#" method="post">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>	
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-phone fa-lg"></i></span>
                                </div>
                                <input type="tel" name="phone_number" id="phone_number" class="form-control" placeholder="Phone Number" required>
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-address-book fa-lg"></i></span>
                                </div>
                                <input type="text" name="roll_number" id="roll_number" class="form-control" placeholder="Roll Number" required>
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-envelope fa-lg"></i></span>
                                </div>
                                <input type="email" name="emailid" id="emailid" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-book fa-lg"></i></span>
                                </div>
                                <select class="form-control" name="branchname" id="branchname" required>
                                    <option value="" disabled selected hidden>Branchname</option>
                                    <option value="CSE-1">CSE-1</option>
                                    <option value="CSE-2">CSE-2</option>
                                    <option value="CSE-3">CSE-3</option>
                                    <option value="CSE-4">CSE-4</option>
                                    <option value="ME-1">ME-1</option>
                                    <option value="ME-2">ME-2</option>
                                    <option value="ME-3">ME-3</option>
                                    <option value="ME-4">ME-4</option>
                                    <option value="ECE-1">ECE-1</option>
                                    <option value="ECE-2">ECE-2</option>
                                    <option value="ECE-3">ECE-3</option>
                                    <option value="ECE-4">ECE-4</option>
                                    <option value="EEE-1">EEE-1</option>
                                    <option value="EEE-2">EEE-2</option>
                                    <option value="EEE-3">EEE-3</option>
                                    <option value="EEE-4">EEE-4</option>
                                    <option value="CE-1">CE-1</option>
                                    <option value="CE-2">CE-2</option>
                                    <option value="CE-3">CE-3</option>
                                    <option value="CE-4">CE-4</option>
                                    <option value="CBS-1">CBS-1</option>
                                    <option value="CBS-2">CBS-2</option>
                                    <option value="CBS-3">CBS-3</option>
                                    <option value="CBS-4">CBS-4</option>
                                </select>
                            </div>
                            
                             <div class="form-group text-center">
                                <input type="submit" value="Sign Up" class="btn login_btn">
                            </div> 
                            <center>
                                <a role="button" href="./teacherpage2.php?branchname=" type="submit" name="signup-submit" id="signup-submit" tabindex="4" 
                                class="btn btn-danger login_btn">
                                    <span class="spinner"><i class="icon-spin icon-refresh" id="spinner"></i></span> Add
                                </a>
                            </center>
                        </form>
                    </div>
                    
                     Modal footer 
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    
                </div>
                </div>
            </div> -->
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
                                            <th class="cell100 column4">Email</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
        
                            <div class="table100-body js-pscroll">
                                <table id="myTable">
                                    <tbody>
                                        <?php $s_no = 0;
                                        if(is_array($getStudents)){
                                            foreach ($getStudents as $proj) {
                                                $s_no++;
                                            echo ' <tr class="row100 body">
                                                    <td class="cell100 column1">'.$proj["std_name"].'</td>
                                                    <td class="cell100 column2">'.$proj["roll_number"].'</td>
                                                    <td class="cell100 column3">'.$proj["contact"].'</td>
                                                    <td class="cell100 column3">'.$proj["emailid"].'</td>
                                            </tr>';
                                        } 
                                        }else{
                                            echo ' <tr class="row100 body">
                                            <td class="cell100 column1" colspan="4">No record found</td>
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
    <script>
    /* submit teacher form and validation */
    $('#add-teacher').on('submit', function (e) {
        e.preventDefault();
        console.log('form submit called');
        var data = $("#add-teacher").serialize();
        console.log(data);
        $.ajax({				
            type : 'POST',
            url  : 'backend/response.php?action=addteacher',
            data : data,
            beforeSend: function(){	
                $("#error").fadeOut();
                $("#signup-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
            },
            success : function(response){	
                console.log("response from response page is:" +response);		
                if($.trim(response) === "1"){
                    alert('successfully registered');									
                    $("#signup-submit").html('Signing Up ...');
                    setTimeout(' window.location.href = "../conFusion/adminpage.php"; ',2000);
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
<?php include('./footer/adminfooter.php');?>
  