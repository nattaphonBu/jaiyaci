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
            required: "กรุณากรอกชื่อ"
        },
        latitude: {
            required: "กรุณากรอกละติจูด",
          },
          longitude: { 
                required:"กรุณากรอกลองจิจูด",
          },
          provinceId:{
            required :"กรุณากรอกจังหวัด"
            
          },
          districtId:{
              required: "กรุณากรอกกอำเภอ"
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
                "province":$("#province").val(),
                "district":$("#district").val(),
                "subdistricts":$("#subdistricts").val(),
                "userId":$("#userId").val()
                
            };
            console.log(data);
            $.post("http://localhost:8080/JaiyaSrc/api/machine/insert", JSON.stringify(data),
            function (data, textStatus, jqXHR){
                if(data.message == true){
                    alert("บันทึกสำเร็จ");
                    window.location.replace( href="<?=base_url("admin/Machine") ?>");
                }else{
                    alert("บันทึกไม่สำเร็จ");
                    window.location.replace( href="<?=base_url("admin/Machine/insert") ?>");
                }
            });
            
        }
    }
    

</script>
   
</body>
</html>

