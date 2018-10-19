<script>
   
   
    $("#update").validate({
        rules: {
            firstname: {
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
            firstname: {
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

    
    $.post("http://localhost:8080/JaiyaSrc/api/UserDataAdmin/findOne", {},
            // alert(data.message);
            function (data, textStatus, jqXHR) {
                // console.log(data);
                var alert = data.data;
                var stralert = "";
                $.each(alert, function( index, value ) {           
                            stralert += 
                            // +'<a href="<?=base_url("user/userData/update/'+value._id+'/'+value.firstname+'/'+value.lastname+'/'+value.dob+'/'+value.gender+'/'+value.disease+'/'+value.bloodgroup+'/'+value.allergy+'/")?>">'
                            +'<a href=userData/update/'+value._id+'/'+value.firstname+'/'+value.lastname+'/'+value.dob+'/'+value.gender+'/'+value.disease+'/'+value.bloodgroup+'/'+value.allergy+'/">'
                            +'<button type="button" class="btn btn-warning">แก้ไข</button>'
                            +'</a>'
                           
                            i++;              
                });
                herbs.html(stralert);  
            }
        );

 

//     var id = $("#id").val();

// $.post("http://localhost:8080/JaiyaSrc/api/UserDataAdmin/findAllUserdata",{
//     "userid": id
// },function(data){
//     if(data.message!=200){
//         showMessage(data.message,"user/userData");
//     }

//     if(data.message == 200){
//         result = data.data;
//         $("#firstname").val(result.firstname);
//         $("#lastname").val(result.lastname);
//         $("#dob").val(result.dob);
//         $("#gender").val(result.gender);
//         $("#disease").val(result.disease);
//         $("#bloodgroup").val(result.bloodgroup);
//         $("#allergy").val(result.allergy);
 
//     }
    
// });
    
    $("#update").submit(function(){
        updateUserdata();
    })


    function updateUserdata(){
        event.preventDefault();
        var isValid = $("#update").valid();
        
        if(isValid){
            var data = {
                "firstName": $("#firstName").val(),
                "lastName": $("#lastName").val(),
                "dob":$("#dob").val(),
                "gender":$("#gender").val(),
                "bloodgroup":$("#bloodgroup").val(),
                "disease":$("#disease").val(),
                "allergy":$("#allergy").val(),
                "id" : $("#_id").val()
                // "id": localStorage.getItem("userId")
                
            };
            console.log(data);
            $.post("http://localhost:8080/JaiyaSrc/api/register/update", JSON.stringify(data),
            function (data, textStatus, jqXHR){
                if(data.message == true){
                    alert("แก้ไขสำเร็จ");
                    window.location.replace( href="<?=base_url("user/userData") ?>");
                }else{
                    alert("แก้ไขไม่สำเร็จ");
                    window.location.replace( href="<?=base_url("user/userData/insert") ?>");
                }
            });
            
        }
    }
    

</script>
   
</body>
</html>






