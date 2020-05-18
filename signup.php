<?php include('./header.php');?>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card cardsignup">
                <div class="card-header">
                    <h3>STUDENT SIGN UP FORM</h3>
                </div>
                <div class="card-body">
                    <form id="signupForm" name="signupForm" role="form" action="" method="post">
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
                                <span class="input-group-text"><i class="fa fa-book fa-lg"></i></span>
                            </div>
                            <input type="text" name="course" id="course" class="form-control" placeholder="Course" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-clock fa-lg"></i></span>
                            </div>
                            <input type="text" name="year_or_sem" id="year_or_sem" class="form-control" placeholder="Year/Sem" required>
                        </div>
                        
                        <!-- <div class="form-group text-center">
                            <input type="submit" value="Sign Up" class="btn login_btn">
                        </div> -->
                        <button type="button" name="signup-submit" id="signup-submit" tabindex="4" 
                        class="btn float-right login_btn">
							 <span class="spinner"><i class="icon-spin icon-refresh" id="spinner"></i></span> Sign Up
						</button>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Already have an account?<a href="./login.php">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
$(document).ready(function(){
    /* handling form validation */
    $("#signup-submit").click(function() {
    console.log('signup clicked');
	$("#signupForm").validate({
		rules: {
			password: {
				required: true,
			},
			username: {
				required: true,
				email: true
			},
		},
		messages: {
			password:{
			  required: "Please enter your password"
			 },
			username: "Please enter your email address",
        },
        submitHandler: function() {
        console.log('form submit called');
    var data = $("#signup-submit").serialize();
    $.ajax({				
        type : 'POST',
        url  : 'backend/response.php?action=signup',
        data : data,
        beforeSend: function(){	
            $("#error").fadeOut();
            $("#signup-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
        },
        success : function(response){	
            console.log("response from response page is:" +response);		
            if($.trim(response) === "1"){
                console.log('dddd');									
                $("#signup-submit").html('Signing Up ...');
                setTimeout(' window.location.href = "dashboard/dashboard.php"; ',2000);
            } else {
                alert("User not found Please Register yourself");									
                $("#error").fadeIn(1000, function(){						
                    $("#error").html(response).show();
                });
            }
        }
    });
    return false;
        }
    })
})
});
</script>
    <?php include('./footer.php');?>
    