<script>
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
    
    var id = $("#id").val();

$.post("http://localhost:8080/JaiyaSrc/api/UserDataAdmin/findAllUserdata",{
    "userid": id
},function(data){
    if(data.message!=200){
        showMessage(data.message,"user/userData");
    }

    if(data.message == 200){
        result = data.data;
        $("#firstname").val(result.firstname);
        $("#lastname").val(result.lastname);
        $("#dob").val(result.dob);
        $("#gender").val(result.gender);
        $("#disease").val(result.disease);
        $("#bloodgroup").val(result.bloodgroup);
        $("#allergy").val(result.allergy);
 
    }
    
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
                "tel":$("#tel").val(),
                "id" : $("#_id").val()

            };
            console.log(data);
            $.post("http://localhost:8080/JaiyaSrc/api/registernew/update", JSON.stringify(data),
            function (data, textStatus, jqXHR){
                if(data.message == true){
                    alert("แก้ไขสำเร็จสำเร็จ");
                    window.location.replace( href="<?=base_url("admin/User") ?>");
                }else{
                    alert("แก้ไขไม่สำเร็จไม่สำเร็จ");
                    window.location.replace( href="<?=base_url("admin/User") ?>");
                }
            
            });
            
        }
    }
    

</script>

</body>
</html>