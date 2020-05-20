$(document).ready(function(){
    /* handling Register form submission and validation */
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
                console.log('dddd');									
                $("#signup-submit").html('Signing Up ...');
                setTimeout(' window.location.href = "dashboard/dashboard.php"; ',2000);
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