<script>
   
   
    $("#insert").validate({
        rules: {
        nameofmachine: {
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
          
        },
        messages: {
        nameofmachine: {
            required: "กรุณากรอกชื่อจริง"
        },
        latitude: {
            required: "กรุณากรอกนามสกุล",
          },
          longitude: { 
                required:"กรุณากรอกวันเดือนปีเกิด",
          },
          provinceId:{
            required :"กรุณากรอกเพศ"
            
          },
          districtId:{
              required: "กรุณากรอกกรุ๊ปเลือด"
          },
            subdistrictId:{
              required: "กรุณากรอกตำบล"
          },
        },
    });
    
    $("#insert").submit(function(){
        insertMachine();
    })


    function insertMachine(){
        event.preventDefault();
        var isValid = $("#insert").valid();
        
        if(isValid){
            var data = {
                "nameofmachine": $("#nameofmachine").val(),
                "latitude": $("#latitude").val(),
                "longitude":$("#longitude").val(),
                "provinceId":$("#provinceId").val(),
                "districtId":$("#districtId").val(),
                "subdistrictsId":$("#subdistrictsId").val(),
                "userId":$("#userId").val()
                
            };
            console.log(data);
            $.post("http://localhost:8080/JaiyaSrc/api/machine/insert", JSON.stringify(data),
            function (data, textStatus, jqXHR){
                alert(data.message);
            });
            
        }
    }
    

</script>
   
</body>
</html>

