
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
            tel:{
                required :true,
                minlength: 9
            },
            dob: { 
                required: true,
            },
            gender:{
                required :true,
                
            },
            bloodgroup:{
                required: true
            }
        },
        messages: {
            username: {
                required: "กรุณากรอกชื่อ"
            },
            password: {
                required: "กรุณากรอกรหัสผ่าน",
                minlength: "รหัสผ่านอย่างน้อย 6 ตัวอักษร"
            },
            tel:{
                minlength: "เบอร์โทรศัพท์อย่างน้อย 9 ตัว",
                required: "กรุณากรอกเบอร์โทรศัพท์"
            },
            dob: { 
                required:"กรุณากรอกวันเดือนปีเกิด",
            },
            gender:{
                required :"กรุณากรอกเพศ"
                
            },
            bloodgroup:{
                required: "กรุณากรอกกรุ๊ปเลือด"
            }
        },
    });
    
        $.post("http://localhost:8080/JaiyaSrc/api/UserDataAdmin/findAllUserdata", {},
            function (data, textStatus, jqXHR) {
                // console.log(data);
                var userdata = data.data.status;
                var stralert = "";
                $.each(userdata, function( index, value ) {
                    console.log(userdata);
                    if(value.iduser == iduser){
                        if(value.status == 1){
                           
                            alert("hello world");
                        }
                        else{
                            window.location.replace( href="<?=base_url("user/Userdata/insert") ?>");
                        }
                    }           
                });
                herbs.html(stralert);  
            }
        );
            




    
    </script>