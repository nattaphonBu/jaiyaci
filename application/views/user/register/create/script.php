<script>
    // $(function(){
    //     $("#insert").submit(function (e) { 
    //         e.preventDefault();
    //         var formdata = {
    //             "username": $("#username").val(),
    //         "email": $("#email").val(),
    //         "password": $("#password").val(),
    //         // "confirmpassword": $("#confirmpassword").val(),
    //         "tel": $("#tel").val()
    //         };
    //         // console.log(formdata);
    //         $.post("http://localhost:8080/JaiyaSrc/api/register/insert", JSON.stringify(formdata),
    //             function (data, textStatus, jqXHR) {
    //                 alert(data.message);
    //             }
    //         );
                
    //     });
    // });
    $("#submit").validate({
        rules: {
            username: {
                required: true
            },
        },
        messages: {
            username: {
                required: "กรุณากรอกชื่อ"
            }
        },
    });
    
    $("#submit").submit(function(){
        createRim();
    })


    function createRim(){
        event.preventDefault();
        var isValid = $("#submit").valid();
        
        if(isValid){
            var data = $("#submit").serialize();
            $.post("http://localhost:8080/JaiyaSrc/api/register/insert", JSON.stringify(formdata),
            function(data){
                alert(data.message);
            });
            
        }
    }
    

</script>
   
</body>
</html>