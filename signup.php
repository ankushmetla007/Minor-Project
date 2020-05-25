<?php include('./header/header.php');?>
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
                        
                        <!-- <div class="form-group text-center">
                            <input type="submit" value="Sign Up" class="btn login_btn">
                        </div> -->
                        <button type="submit" name="signup-submit" id="signup-submit" tabindex="4" 
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
    
    <?php include('./footer/footer.php');?>
    