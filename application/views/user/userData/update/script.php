<script>
    var data = {
        _id:5ba0a404a5bf58b81c6b7053;
    };

$.post(base_url+"http://localhost:8080/JaiyaSrc/api/register/findOne",JSON.stringify(data){
    "_id": 5ba0a404a5bf58b81c6b7053,
},function(data){
    if(data.message!=200){
        showMessage(data.message,"admin/car");
    }else{
        result = data.data;
        $("#firstname").val(result.firstname);
        // $("#machineSize").val(result.machineSize);
        // $("#machineCode").val(result.machineCode);
    }
});
   
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
            minlenght: 9
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
        UpdateUserdata();
    })


    function UpdateUserdata(){
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
            $.post("http://localhost:8080/JaiyaSrc/api/register/update", JSON.stringify(data),
            function (data, textStatus, jqXHR){
                alert(data.message);
            });
            
        }
    }
    

</script>
   
</body>
</html>