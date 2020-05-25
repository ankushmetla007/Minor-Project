<?php include('./header/adminheader.php');
include('./functions.php');
$db = new dbObj();
$connString =  $db->getConnstring();
$rspCls = new Getdata($connString);
$getTeachers = $rspCls->getTeachers();
?>
    <div class="content">
        <div class="container">
            
            <div class="row row-content">
                <div class="col-2 offset-4">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                        Add Teacher
                    </button>  
                </div>
            </div>                                  
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
                        <form id="add-teacher" name="add-teacher" role="form" action="" method="post">
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
                                <button type="submit" name="signup-submit" id="signup-submit" tabindex="4" 
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
            <div class="row row-content">
                <div class="limiter">
                    <div class="wrap-table100">
                        <div class="table100 ver1 m-b-110">
                            <div class="table100-head">
                                <table>
                                    <thead>
                                        <tr class="row100 head">
                                            <th class="cell100 column1">Name</th>
                                            <th class="cell100 column1">Phone Number</th>
                                            <th class="cell100 column1">Email</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
        
                            <div class="table100-body js-pscroll">
                                <table id="myTable">
                                    <tbody>
                                        <?php $s_no = 0;
                                        foreach ($getTeachers as $proj) {
                                            $s_no++;
                                        echo ' <tr class="row100 body">
                                            <td class="cell100 column1">'.$proj["name"].'</td>
                                            <td class="cell100 column1">'.$proj["contact"].'</td>
                                            <td class="cell100 column1">'.$proj["email"].'</td>
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
  