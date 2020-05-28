<?php include('./header/header.php');?>
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
                            <select class="form-control" name="role" id="role" required>
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
                        <button type="submit" name="login-submit" id="login-submit" tabindex="4" 
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
                        <a href="#" data-toggle="modal" data-target="#myModal">
                            Forgot Password
                        </a> 
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                
                                    <div class="modal-header">
                                    <h4 class="modal-title">Forgot Password</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <div class="modal-body">
                                        <center><p>Coming Soon</p></center>
                                    </div>
                                    
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">OK</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('./footer/footer.php');
