<script>
    
    var provinceDropdown = $("#provinceId");
      provinceDropdown.append('<option value="">เลือกจังหวัด</option>');

      var districtDropdown = $('#districtId');
      districtDropdown.append('<option value="">เลือกอำเภอ</option>');

      var subdistrictDropdown = $('#subdistrictId');
      subdistrictDropdown.append('<option value="">เลือกตำบล</option>');

      function onLoad(){
        loadProvince();
        loadSparepartProvince();
      }
        onLoad();  
      function loadProvince(){
        $.post("http://localhost:8080/JaiyaSrc/api/location/findprovince",{},
            function (data, textStatus, jqXHR){
            var province = data.data;
            $.each(province, function( index, value,textStatus, jqXHR ) {
              provinceDropdown.append('<option value="'+value.provinceId+'">'+value.provinceName+'</option>');
            });
          }
        );
      }

      provinceDropdown.change(function(){
        var provinceId = $(this).val();
        loadDistrict(provinceId);
      });

    function loadDistrict(provinceId){
      districtDropdown.html("");
      districtDropdown.append('<option value="">เลือกอำเภอ</option>');
      subdistrictDropdown.html("");
      subdistrictDropdown.append('<option value="">เลือกตำบล</option>');

      $.post(base_url+"apiUser/LocationforRegister/getDistrict",{
        provinceId: provinceId
      },
        function (data, textStatus, jqXHR){
          var district = data.data;
          $.each(district, function( index, value ) {
            districtDropdown.append('<option value="'+value.districtId+'">'+value.districtName+'</option>');
          });
        }
      );

    }

    districtDropdown.change(function(){
      var districtId = $(this).val();
      loadSubdistrict(districtId);
    });

    function loadSubdistrict(districtId){
      subdistrictDropdown.html("");
      subdistrictDropdown.append('<option value="">เลือกตำบล</option>');

      
           
      $.post("http://localhost:8080/JaiyaSrc/api/location/searchsubdis", JSON.stringify(data){
        districtId: districtId
      },
      function (data, textStatus, jqXHR){
          var subDistrict = data.data;
          $.each(subDistrict, function( index, value ) {
            subdistrictDropdown.append('<option value="'+value.subdistrictId+'">'+value.subdistrictName+'</option>');
          });
        }
      );
    }
    

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