<script>
   
   
    $("#update").validate({
        rules: {
            firstname: {
                required: true
            },
            lastname: {
                required: true
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
            lastname: {
                required: "กรุณากรอกนามสกุล"
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
    
    $("#update").submit(function(){
        updateUserdata();
    })


    function updateUserdata(){
        event.preventDefault();
        var isValid = $("#update").valid();
        
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






