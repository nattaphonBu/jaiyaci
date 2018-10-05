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
    // jQuery.validator.addMethod("username", function(value, element) {
    //   return this.optional( element  ) || /^[A-Za-z\d]+$/.test( value );
    // }, 'ภาษาอังกฤษหรือตัวเลขเท่านั้น');
    $("#insert").validate({
        rules: {
            username: {
                required: true
            },
            password: {
                required: true,
                minlength:6
          },
          confirmpassword: { 
                required: true,
                equalTo: "#password",
                minlength: 6
          },
          tel:{
            required :true,
            minlength: 9
          }
        },
        messages: {
            username: {
                required: "กรุณากรอกชื่อ"
            },
            password: {
                required: "รหัสผ่าน",
                minlength: "รหัสผ่านอย่างน้อย 6 ตัวอักษร"
            },
          confirmpassword: {
                required: "รหัสผ่านอีกครั้ง",
                equalTo: "กรุณาใส่รหัสผ่านให้ตรงกัน",
                minlength: "รหัสผ่านอย่างน้อย 6 ตัวอักษร"
            },
            tel:{
                minlength: "เบอร์โทรศัพท์อย่างน้อย 9 ตัว",
                required: "เบอร์โทรศัพท์"
            }
        },
    });
    
    $("#insert").submit(function(){
        register();
    })


    function register(){
        event.preventDefault();
        var isValid = $("#insert").valid();
        
        if(isValid){
            var data = {
                "username": $("#username").val(),
                "password": $("#password").val(),
                "email":$("#email").val(),
                "tel":$("#tel").val()
            };
            console.log(data);
            $.post("http://localhost:8080/JaiyaSrc/api/registernew/insert", JSON.stringify(data),
            function (data, textStatus, jqXHR){
                alert(data.message);
            });
            
        }
    }
    

</script>

</body>
</html>