$(document).ready(function(){
    /* handling Register form submission and validation */
    console.log('form submit loaded');
    $('#signupForm').on('submit', function (e) {
    e.preventDefault();
    console.log('form submit called');
    var data = $("#signupForm").serialize();
    console.log(data);
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
                alert('successfully registered');									
                $("#signup-submit").html('Signing Up ...');
                setTimeout(' window.location.href = "../conFusion/login.php"; ',2000);
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

    /* handling Sign up form submission and validation */
    $('#loginForm').on('submit', function (e) {
        e.preventDefault();
        console.log('form submit called');
        var data = $("#loginForm").serialize();
        console.log(data);
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
                if($.trim(response)){
                    console.log('login successful');									
                    $("#signup-submit").html('Signing in ...');
                    console.log('window.location.href = "'+response+'page.php"; ');
                    setTimeout('window.location.href = "'+response+'page.php"; ',2000);
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

});