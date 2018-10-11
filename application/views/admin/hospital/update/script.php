<script>

    $("#update").validate({
    rules: {
        nameofhospital: {
            required: true
        },
        dob:{
            required :true,    
        },
        bloodgroup:{
            required: true
        }
        
    },
    messages: {
        nameofhospital: {
            required: "กรุณากรอกชื่อ โรงพยาบาล"
        },
        dob: {
            required: "กรุณากรอก วัน เดือน ปี เกิด",
        },
        bloodgroup: { 
                required:"กรุณากรอก กรุ๊ปเลือด",
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
                "allergy": $("#allergy").val(),
                "dob":$("#dob").val(),
                "bloodgroup":$("#bloodgroup").val(),
                "disease":$("#disease").val(),
                
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

