<?php include('./header/adminheader.php');?>
    <div class="content">
        <div class="container">
            <div class="row row-content">
                <div class="col-8 offset-1">
                   <div class="card">
                      <h3 class="card-header bg-danger text-white">Teachers</h3>
                      <div class="card-body bg-light">
                          <div class="row row-content">
                                <div class="col-3 offset-2">
                                    <a class="btn btn-danger text-white" href="./adminpage3.php">View Teachers</a>
                                </div>
                                <div class="col-3 offset-2">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                                        Add Teacher
                                    </button>                                    
                                    <!-- The Modal -->
                                    <div class="modal fade" id="myModal">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                        
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                            <h4 class="modal-title">Add Teacher</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            
                                            <!-- Modal body -->
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
                                                            <span class="input-group-text"><i class="fa fa-envelope fa-lg"></i></span>
                                                        </div>
                                                        <input type="email" name="emailid" id="emailid" class="form-control" placeholder="Email" required>
                                                    </div>
                                                    
                                                    <!-- <div class="form-group text-center">
                                                        <input type="submit" value="Sign Up" class="btn login_btn">
                                                    </div> -->
                                                    <center>
                                                        <button type="submit" name="addteacherbutton" id="addteacherbutton" tabindex="4" 
                                                        class="btn btn-danger login_btn">
                                                            <span class="spinner"><i class="icon-spin icon-refresh" id="spinner"></i></span> Add
                                                        </button>
                                                    </center>
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
                      </div>
                   </div>
                   </div>
            </div>
            <div class="row row-content">
                <pre>



                </pre>
            </div>
            <div class="row row-content">
                <div class="col-8 offset-1">
                   <div class="card">
                      <h3 class="card-header bg-danger text-white">Students</h3>
                      <div class="card-body bg-light">
                          <div class="row row-content">
                                <div class="col-3 offset-2">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal1">
                                        View Student
                                    </button>                                    
                                    <!-- The Modal -->
                                    <div class="modal fade" id="myModal1">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                        
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                            <h4 class="modal-title">View Student</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form id="searchStudentForm" name="searchStudentForm" role="form" action="adminpage2.php?branchname=" method="post">
                                                    <div class="input-group form-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa fa-book fa-lg"></i></span>
                                                        </div>
                                                        <select class="form-control" name="std-branchname" id="std-branchname" required>
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
                                                    
                                                    <center>
                                                        <button type="submit" name="signup-submit" id="signup-submit" tabindex="4" 
                                                        class="btn btn-danger login_btn">
                                                            <span class="spinner"><i class="icon-spin icon-refresh" id="spinner"></i></span> View
                                                        </button>
                                                    </center>
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
                                <div class="col-3 offset-2">
                                    <!-- <a class="btn btn-danger text-white" href="./signup.php">Add Students</a> -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal2">
                                        Add Student
                                    </button>                                    
                                    <!-- The Modal -->
                                    <div class="modal fade" id="myModal2">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                        
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                            <h4 class="modal-title">Add Student</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form id="addStudentForm" name="addStudentForm" role="form" action="#" method="post">
                                                    <div class="input-group form-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                        </div>
                                                        <input type="text" name="username" id="user-name" class="form-control" placeholder="Username" required>	
                                                    </div>
                                                    <div class="input-group form-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                        </div>
                                                        <input type="password" name="password" id="pass_word" class="form-control" placeholder="Password" required>
                                                    </div>
                                                    <div class="input-group form-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa fa-phone fa-lg"></i></span>
                                                        </div>
                                                        <input type="tel" name="phone_number" id="phone_number1" class="form-control" placeholder="Phone Number" required>
                                                    </div>
                                                    <div class="input-group form-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa fa-address-book fa-lg"></i></span>
                                                        </div>
                                                        <input type="text" name="roll_number" id="roll_number1" class="form-control" placeholder="Roll Number" required>
                                                    </div>
                                                    <div class="input-group form-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa fa-envelope fa-lg"></i></span>
                                                        </div>
                                                        <input type="email" name="emailid" id="emailid1" class="form-control" placeholder="Email" required>
                                                    </div>
                                                    <div class="input-group form-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa fa-book fa-lg"></i></span>
                                                        </div>
                                                        <select class="form-control" name="branchname" id="branchname1" required>
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
                                                    
                                                    <!-- <div class="form-group text-center">
                                                        <input type="submit" value="Sign Up" class="btn login_btn">
                                                    </div> -->
                                                    <center>
                                                        <button type="submit" name="addstudent-submit" id="addstudent-submit" tabindex="4" 
                                                        class="btn btn-danger login_btn">
                                                            <span class="spinner"><i class="icon-spin icon-refresh" id="spinner"></i></span> Add
                                                        </button>
                                                    </center>
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
                      </div>
                   </div>
                   </div>
            </div>
        </div>
    </div>
<script>
        /* submit teacher form and validation */
        $('#addTeacher').on('submit', function (e) {
        e.preventDefault();
        console.log('form submit called');
        var data = $("#addTeacher").serialize();
        console.log(data);
        $.ajax({				
            type : 'POST',
            url  : 'backend/response.php?action=addteacher',
            data : data,
            beforeSend: function(){	
                $("#error").fadeOut();
                $("#addteacherbutton").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
            },
            success : function(response){	
                console.log("response from response page is:" +response);		
                if($.trim(response) === "1"){
                    alert('successfully registered');									
                    $("#addteacherbutton").html('Adding Teacher...');
                    setTimeout(' window.location.href = "../conFusion/adminpage.php"; ',2000);
                } else {
                    console.log("Error is:" +response);
                    alert("Something went wrong. Please try again");									
                    $("#error").fadeIn(1000, function(){						
                        $("#error").html(response).show();
                    });
                }
            }
        });
        return false;
    })
    /* submit teacher form and validation */
    $('#addStudentForm').on('submit', function (e) {
        e.preventDefault();
        console.log('form submit called');
        var data = $("#addStudentForm").serialize();
        console.log(data);
        $.ajax({				
            type : 'POST',
            url  : 'backend/response.php?action=signup',
            data : data,
            beforeSend: function(){	
                $("#error").fadeOut();
                $("#addstudent-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
            },
            success : function(response){	
                console.log("response from response page is:" +response);		
                if($.trim(response) === "1"){
                    alert('successfully registered');									
                    $("#addstudent-submit").html('Signing Up ...');
                    setTimeout(' window.location.href = "../conFusion/adminpage.php"; ',2000);
                } else {
                    console.log("Error is:" +response);
                    alert("Something went wrong. Please try again");									
                    $("#error").fadeIn(1000, function(){						
                        $("#error").html(response).show();
                    });
                }
            }
        });
        return false;
    })
    $('#searchStudentForm').on('submit', function() {
    var id = $('#std-branchname').val();
    var formAction = $('#searchStudentForm').attr('action');
    $('#searchStudentForm').attr('action', formAction + id);
    });
</script>
<?php include('./footer/adminfooter.php');?>

    