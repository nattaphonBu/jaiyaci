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
            
            $.post("http://localhost:8080/JaiyaSrc/api/login/findOne", JSON.stringify(data),
            function (data, textStatus, jqXHR){
                alert(data.message);
                var username = data.data.username;
                var _id = data.data._id;
                var status =data.data.status;
                localStorage.setItem("username",username);
                localStorage.setItem("_id", _id);
                localStorage.setItem("status", "status");
                console.log(username);
                console.log(_id);
                console.log(status);
                console.log(status);
                if(status == 1){
                    window.location.replace( href="<?=base_url("menu/menu") ?>");
                }
                else{
                    window.location.replace( "https://www.w3schools.com/jsref/met_console_log.asp");
                }
                
            });
            
        }
    }

    </script>