
<script>
 $("#insert").validate({
        rules: {
            username: {
                required: true
            },
            lastname: {
                required: true
            },
           
            dob: { 
                required: true,
            },
            gender:{
                required :true,
                
            },
            bloodgroup:{
                required: true
            }
        },
        messages: {
            username: {
                required: "กรุณากรอกชื่อ"
            },
            lastname: {
                required: "กรุณากรอกนามสกุล"
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
    
        $.post("http://localhost:8080/JaiyaSrc/api/UserDataAdmin/findAllUserdata", {},
            function (data, textStatus, jqXHR) {
                // console.log(data);
                var userdata = data.data.status;
                var stralert = "";
                
                $.each(userdata, function( index, value ) {
                    console.log(userdata);
                    if(value.iduser == iduser){
                        if(value.status == 1){
                            stralert = value.username
                            alert("hello world");
                        }
                        else{
                            window.location.replace( href="<?=base_url("user/Userdata/insert") ?>");
                        }
                    }           
                });
                herbs.html(stralert);  
            }
        );
            




    
    </script>