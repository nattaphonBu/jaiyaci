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
    
    $("#insert").submit(function(){
        insertUserdata();
    })


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
                "id": localStorage.getItem("userId")
            };
            console.log(data);
            $.post("http://localhost:8080/JaiyaSrc/api/register/update", JSON.stringify(data),
            function (data, textStatus, jqXHR){
                alert(data.message);
            });
            
        }
    }
    

</script>
   
</body>
</html>






