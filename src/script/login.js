$(document).on('submit' , '#form-login' , function(event){

    event.preventDefault()
    var username = $("#username").val()
    var password = $("#password").val()
    $.ajax({
        type:'post',
        url: "data/user_login.php",
        data: {username:username , password:password},
        dataType: "json",
        success: function (response) {

                if(data.valid == true)
                {
                    window.location = data.url;
                }
                else
                 {
                    alert("Invalid Username or Password!");
                }
        

        },
         error : function()
         {
            alert("An error occured");
         }
    });


});