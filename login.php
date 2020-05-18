<?php include('./header.php');?>
<div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card cardlogin">
                <div class="card-header">
                    <h3>LOGIN</h3>
                </div>
                <div class="card-body">
                <form id="loginForm" name="loginForm" role="form" action="" method="post">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="username" id="username"  class="form-control" placeholder="Username" required>	
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-sign-in fa-lg"></i></span>
                            </div>
                            <select class="form-control" name="login_role" id="role" required>
                                <option value="" disabled selected hidden>Login Role</option>
                                <option value="admin">Admin</option>
                                <option value="teacher">Teacher</option>
                                <option value="student">Student</option>
                            </select>
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Remember Me
                        </div>
                        <!-- <div class="form-group">
                            <input type="submit" value="Login" id="login_button" class="btn float-right login_btn">
                        </div> -->
                        <button type="button" name="login-submit" id="login-submit" tabindex="4" 
                        class="btn float-right login_btn">
							 <span class="spinner"><i class="icon-spin icon-refresh" id="spinner"></i></span> Log In
						</button>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="./signup.php">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
$(document).ready(function(){
    /* handling form validation */
    $("#login-submit").click(function() {
    console.log('login clicked');
	$("#loginForm").validate({
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
    })
    console.log('form submit called');
    var data = $("#loginForm").serialize();
    $.ajax({				
        type : 'POST',
        url  : 'backend/response.php?action=login',
        data : data,
        beforeSend: function(){	
            $("#error").fadeOut();
            $("#login-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
        },
        success : function(response){	
            console.log("response from response page is:" +response);		
            if($.trim(response) === "1"){
                console.log('dddd');									
                $("#login-submit").html('Signing In ...');
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
})
});
</script>
<?php include('./footer.php');
