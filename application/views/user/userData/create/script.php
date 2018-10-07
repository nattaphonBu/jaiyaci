<script>
   
   
    $("#insert").validate({
        rules: {
        firstName: {
            required: true
        },
        lastName: {
            required: true,
          },
          dob: { 
                required: true,
          },
          gender:{
            required :true,
            
          },
          bloodgroup:{
              required: true
          },
          
        },
        messages: {
        firstName: {
            required: "กรุณากรอกชื่อจริง"
        },
        lastName: {
            required: "กรุณากรอกนามสกุล",
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
                "allergy":$("#allergy").val()
            };
            console.log(data);
            $.post("http://localhost:8080/JaiyaSrc/api/register/insert", JSON.stringify(data),
            function (data, textStatus, jqXHR){
                alert(data.message);
            });
            
        }
    }
    

</script>
   
</body>
</html>

