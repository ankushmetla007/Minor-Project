function submitForm() {	
    console.log('form submit called');
    var data = $("#loginForm").serialize();
    $.ajax({				
        type : 'POST',
        url  : '../backend/response.php?action=login',
        data : data,
        beforeSend: function(){	
            $("#error").fadeOut();
            $("#login_button").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
        },
        success : function(response){			
            if($.trim(response) === "1"){
                console.log('dddd');									
                $("#login-submit").html('Signing In ...');
                setTimeout(' window.location.href = "dashboard.php"; ',2000);
            } else {									
                $("#error").fadeIn(1000, function(){						
                    $("#error").html(response).show();
                });
            }
        }
    });
    return false;
}