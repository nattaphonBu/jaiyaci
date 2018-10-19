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






