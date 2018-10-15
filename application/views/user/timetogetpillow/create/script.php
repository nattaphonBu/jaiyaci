<script>
    
    $("#insert").validate({
        rules: {
            time: {
                required: true
            },
            date: {
                required: true,
                
          },
          pillow: { 
                required: true,
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
                "pillow":$("#pillow").val()
            };
            console.log(data);
            $.post("http://localhost:8080/JaiyaSrc/api/registernew/insert", JSON.stringify(data),
            function (data, textStatus, jqXHR){
                alert(data.message);
            });
            
        }
    }
    

</script>

</body>
</html>