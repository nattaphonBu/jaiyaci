<script>
   
   
    $("#insert").validate({
        rules: {
        firstname: {
            required: true
        },
        lastname: {
            required: true,
          },
          dob: { 
                required: true,
          },
          gender:{
            required :true,
            minlenght: 9
          },
          bloodgroup:{
              required: true
          },
          
        },
        messages: {
        firstname: {
            required: "กรุณากรอกชื่อจริง"
        },
        lastname: {
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
        var data = {
                "firstname": $("#firstname").val(),
                "lastname": $("#lastname").val(),
                "dob":$("#dob").val(),
                "gender":$("#gender").val(),
                "bloodgroup":$("#bloodgroup").val()
            };
        if(isValid){
            var data = $("#insert").serialize();
            $.post("http://localhost:8080/JaiyaSrc/api/register/insert", JSON.stringify(data),
            function(data){
                alert(data.message);
            });
            
        }
    }
    

</script>
   
</body>
</html>