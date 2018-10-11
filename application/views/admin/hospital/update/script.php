<script>
   
   
   $("#update").validate({
    rules: {
    nameofhospital: {
        required: true
    },
    latitude: {
        required: true,
      },
    longitude: { 
            required: true,
      },
    provinceId:{
        required :true,    
      },
    districtId:{
          required: true
      },
    subdistrictId:{
          required: true
      },
    tell:{
          required: true
      }
      
    },
    messages: {
    nameofhospital: {
        required: "กรุณากรอกชื่อ โรงพยาบาล"
    },
    latitude: {
        required: "กรุณากรอก ละติจูด",
      },
    longitude: { 
            required:"กรุณากรอก ลองติจูด",
      },
    provinceId:{
        required :"กรุณากรอกชื่อ จังหวัด" 
      },
    districtId:{
          required: "กรุณากรอกชื่อ อำเภอ"
      },
    subdistrictId:{
          required: "กรุณากรอกชื่อ ตำบล"
      },
    tell:{
          required: "กรุณากรอกเบอร์โทร โรงพยาบาล"
      }
    },
});
    
    $("#update").submit(function(){
        updateHospital();
    })


    function updateHospital(){
        event.preventDefault();
        var isValid = $("#update").valid();
        
        if(isValid){
            var data = {
                "nameofhospital": $("#nameofhospital").val(),
                "latitude": $("#latitude").val(),
                "longitude":$("#longitude").val(),
                "provinceId":$("#provinceId").val(),
                "districtId":$("#districtId").val(),
                "subdistrictsId":$("#subdistrictsId").val(),
                "tell":$("#tell").val(),
                "id": localStorage.getItem("userId")
                
            };
            console.log(data);
            $.post("http://localhost:8080/JaiyaSrc/api/hospital/update", JSON.stringify(data),
            function (data, textStatus, jqXHR){
                alert(data.message);
            });
            
        }
    }
    

</script>
   
</body>
</html>

