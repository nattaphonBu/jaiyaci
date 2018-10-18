<script>
    console.log("helllo");
    $("#insert").validate({
        rules: {
            nameofhospital: {
                required: true
            },
            latijude: {
                required: true
                
          },
          longjijude: { 
                required: true
          },
          tell:{
                required: true
          },
          province:{
            required:true
          },
          district:{
            required:true
          },
          subdistrict:{
            required:true 
          }

        },
        messages: {
            nameofhospital: {
                required: "กรุณากรอกชื่อโรงพยาบาล"
            },
            latijude: {
                required: "กรุณากรอกละติจูด",
                
            },
            longjijude: {
                required: "กรุณากรอกลองจิจูด",
                
            },
            tell:{
            required :"กรุณากรอกเบอร์โทรศัพท์"
        },
        province:{
            required : "กรุณากรอกชื่อจังหวัด"
        },
        district:{
            required : "กรุณากรอกชื่ออำเภอ"
        },
        subdistrict:{
            required: "กรุณากรอกชื่อตำบล"
          }
        }
    });
    
    $("#insert").submit(function(){
        hospital();
    })


    function hospital(){
        event.preventDefault();
        var isValid = $("#insert").valid();
        
        if(isValid){
            var data = {
                "nameofhospital": $("#nameofhospital").val(),
                "latijude": $("#latijude").val(),
                "longjijude":$("#longjijude").val(),
                "tell": $("#tell").val(),
                "province": $("#province").val(),
                "district": $("#district").val(),
                "subdistrict": $("#subdistrict").val(),
                "iduser": localStorage.getItem("_id")
            };
            console.log(data);
            $.post("http://localhost:8080/JaiyaSrc/api/HospitalAdmin/insert", JSON.stringify(data),
            function (data, textStatus, jqXHR){
                if(data.message == true){
                    alert("บันทึกสำเร็จ");
                    window.location.replace( href="<?=base_url("menu") ?>");
                }else{
                    alert("บันทึกไม่สำเร็จ");
                    window.location.replace( href="<?=base_url("menu") ?>");
                }
            });
            
        }
    }
    

</script>

</body>
</html>