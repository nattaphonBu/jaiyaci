<script>
    

    $("#insert").validate({
        rules: {
        nameofhospital: {
            required: true
        },
        latijude: {
            required: true,
        },
        longjijude: { 
                required: true,
        },
        tell:{
            required :true,
            minlength: 9
        },
        provinceId:{
            required: true
        },
        districtId:{
            required: true
        },
        subdistrictId:{
            required: true
        }
        
        },
        messages: {
        nameofhospital: {
            required: "กรุณากรอกชื่อโรงพยาบาล"
        },
        latijude: {
            required: "กรุณากรอกละจิจูด",
        },
        longjijude: { 
                required:"กรุณากรอลองจิจูด",
        },
        tell:{
            required :"กรุณากรอกเบอร์โทรศัพท์",
            minlength: "เบอร์โทรศัพท์อย่างน้อย 9 ตัว"
            
        },
        provinceId:{
            required: "กรุณาเลือกจังหวัด"
        },
        districtId:{
            required:"กรุณาเลือกอำเภอ"
        },
        subdistrictId:{
            required:"กรุณาเลือกตำบล"
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
                "nameofhospital": $("#nameofhospital").val(),
                "latijude": $("#latijude").val(),
                "longjijude":$("#longjijude").val(),
                "tell":$("#tell").val(),
                "provinceId":$("#provinceId").val(),
                "districtId":$("#districtId").val(),
                "required":$("#required").val()
            };
            console.log(data);
            $.post("http://localhost:8080/JaiyaSrc/api/hospitaladmin/insert", JSON.stringify(data),
            function (data, textStatus, jqXHR){
                alert(data.message);
            });
            
        }
    }
    

</script>
   
</body>
</html>