<script>
$("#insert").validate({
        rules: {
            username: {
                required: true
            },
            password: {
                required: true,
          }
        },
        messages: {
            username: {
                required: "กรุณากรอกชื่อ"
            },
            password: {
                required: "กรุณากรอกรหัสผ่าน",
                }
        },
    });
    $("#insert").submit(function(){
        login();
    })

    // localStorage.setItem("userId", "5ba0a404a5bf58b81c6b7053");
    
    // localStorage.setItem("userName", "root");
    // var userName = localStorage.getItem("userName");
    // console.log(userName);

    function login(){
        event.preventDefault();
        var isValid = $("#insert").valid();
        
        if(isValid){
           var data = {
                "username": $("#username").val(),
                "password": $("#password").val(),
            }
            var data = $("#insert").serialize();
            $.post("http://localhost:8080/JaiyaSrc/api/login/findOne", JSON.stringify(data),
            function (data, textStatus, jqXHR){
                alert(data.message);
                var username = data.username;
                var _id = data._id;
                var status =data.status;
                localStorage.setItem("userName", "username");
                localStorage.setItem("_id", "_id");
                localStorage.setItem("status", "status");
                console.log(username);
                console.log(_id);
                console.log(status);
                if( status== 1){
                    window.location.replace("https://www.google.com/");
                }
                else{
                    window.location.replace("https://www.w3schools.com/jsref/prop_win_localstorage.asp");
                }
                
            });
            
        }
    }

    </script>