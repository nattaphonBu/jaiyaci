<script>
$("#login").validate({
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
        createRim();
    })


    // function createRim(){
    //     event.preventDefault();
    //     var isValid = $("#insert").valid();
        
    //     if(isValid){
    //         var data = $("#insert").serialize();
    //         $.post("http://localhost:8080/JaiyaSrc/api/register/insert", JSON.stringify(data),
    //         function(data){
    //             alert(data.message);
    //         });
            
    //     }
    // }

    </script>