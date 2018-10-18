<script>
    //    if(username == null){
    //     window.location.replace(href="<?=base_url("login") ?>");
    // }
   
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
    
    $("#insert").submit(function(){
        insertUserdata();
    })
    // var username = localStorage.getItem("username");
    // console.log(username);

    function insertUserdata(){
        event.preventDefault();
        var isValid = $("#insert").valid();
        
        if(isValid){
            var data = {
                "firstName": $("#firstName").val(),
                "lastName": $("#lastName").val(),
                "dob":$("#dob").val(),
                "gender":$("#gender").val(),
                "bloodgroup":$("#bloodgroup").val(),
                "disease":$("#disease").val(),
                "allergy":$("#allergy").val(),
                "iduser": localStorage.getItem("_id")
            };
            console.log(data);
            $.post("http://localhost:8080/JaiyaSrc/api/register/insert", JSON.stringify(data),
            function (data, textStatus, jqXHR){
                if(data.message == true){
                    alert("ลงทะเบียนข้อมูลสำเร็จ");
                    window.location.replace( href="<?=base_url("menu") ?>");
                }else{
                    alert("ลงทะเบียนล้มเหลว");
                    window.location.replace( href="<?=base_url("user/Userdata/insert") ?>");
                }
            });
            
        }
    }
    

</script>
   
</body>
</html>

