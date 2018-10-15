<script>
    
    $("#insert").validate({
        rules: {
            time: {
                required: true
            },
            date: {
                required: true
                
          },
          pillow: { 
                required: true
          },
          rang:{
                required: true
          }
        },
        messages: {
            time: {
                required: "กรุณากรอกเวลา"
            },
            date: {
                required: "กรุณากรอกวันเวลาที่กินยา",
                
            },
          pillow: {
                required: "กรุณากรอกชื่อยา",
                
            },
        rang:{
            required :"กรุณากรอกช่วงเวลา"
        },
        },
    });
    
    $("#insert").submit(function(){
        timetogetpillow();
    })


    function timetogetpillow(){
        event.preventDefault();
        var isValid = $("#insert").valid();
        
        if(isValid){
            var data = {
                "date": $("#date").val(),
                "time": $("#time").val(),
                "pillow":$("#pillow").val(),
                "rang": $("#rang".val)(),
                "iduser": localStorage.getItem("userId")
            };
            console.log(data);
            $.post("http://localhost:8080/JaiyaSrc/api/timetogetpillow/insert", JSON.stringify(data),
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