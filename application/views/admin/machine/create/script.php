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
          
          districtId:{
              required: true
          },
          provinceId:{
            required :true,
            
          },
        //     subdistrictId:{
        //       required: true
        //   },
          
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
          
          districtId:{
              required: "กรุณากรอกกอำเภอ"
          },
          provinceId:{
            required :"กรุณากรอกจังหวัด"
            
          },
        //     subdistrictId:{
        //       required: "กรุณากรอกตำบล"
        //   },
        },
    });
    var provinceDropdown = $("#provinceId");
    provinceDropdown.append('<option value="">เลือกจังหวัด</option>');
    var districtDropdown = $('#districtId');
      districtDropdown.append('<option value="">เลือกอำเภอ</option>');

      var subdistrictDropdown = $('#subdistrictId');
      subdistrictDropdown.append('<option value="">เลือกตำบล</option>');

    loadProvince();
    
 
    function loadProvince(){
    $.post("http://localhost:8080/JaiyaSrc/api/location/findprovince",{},
        function (data, textStatus, jqXHR) {
            // alert(data.message);
        var province = data.data;
        // console.log(province);
        $.each(province, function( index, value ) {
            provinceDropdown.append('<option value="'+value.provinceId+'">'+value.provinceName+'</option>');
            });
        });
    }
    // provinceDropdown.change(function(){
    //     var provinceId = $(this).val();
    //     loadDistrict(provinceId);
    //   });

    // function loadDistrict(provinceId){
    //     districtDropdown.html("");
    //     districtDropdown.append('<option value="">เลือกอำเภอ</option>');
    //     subdistrictDropdown.html("");
    //     subdistrictDropdown.append('<option value="">เลือกตำบล</option>');

    //   $.post("http://localhost:8080/JaiyaSrc/api/location/search",{
    //     provinceId : provinceId
    //   },
    //     function (data, textStatus, jqXHR) {
    //         alert(data.message);
    //       var district = data.data;
    //       $.each(district, function( index, value ) {
    //         districtDropdown.append('<option value="'+value.districtId+'">'+value.districtName+'</option>');
    //       });
    //     }
    //   );

    // }

    // districtDropdown.change(function(){
    //   var districtId = $(this).val();
    //   loadSubdistrict(districtId);
    // });

    // function loadSubdistrict(districtId){
    //   subdistrictDropdown.html("");
    //   subdistrictDropdown.append('<option value="">เลือกตำบล</option>');
      
    //   $.post("http://localhost:8080/JaiyaSrc/api/location/searchsubdis",{
    //     districtId: districtId
    //   },
    //   function (data, textStatus, jqXHR) {
    //       var subDistrict = data.data;
    //       $.each(subDistrict, function( index, value ) {
    //         subdistrictDropdown.append('<option value="'+value.subdistrictId+'">'+value.subdistrictName+'</option>');
    //       });
    //     }
    //   );
    // }
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
                // "districtId":$("#districtId").val()
                // "subdistrictsId":$("#subdistrictsId").val()                
                
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

