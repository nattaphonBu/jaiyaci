<script>
    
    $("#insert").validate({
        rules: {
           
        },
        messages: {
        },
    });
    
    $("#update").submit(function(){
        timetogetpillowbutton();
    })
    $datetoeat = date("m.d.y");
    $timetoeat = date("H:i:s");
    function timetogetpillowbutton(){
        event.preventDefault();
        var isValid = $("#update").valid();
        
        if(isValid){
            var data = {
                "datetoeat": $("#datetoeat").val(),
                "timetoeat": $("#timetoeat").val(),
                "status": $("#status").val(),
                "_id":$("#_id").val()
            };
            console.log(data);
            $.post("http://localhost:8080/JaiyaSrc/api/timetogetpillow/update", JSON.stringify(data),
            function (data, textStatus, jqXHR){
                if(data.message == true){
                    alert("บันทึกสำเร็จ");
                    window.location.replace( href="<?=base_url("user/Alert/alert") ?>");
                }else{
                    alert("บันทึกไม่สำเร็จ");
                    window.location.replace( href="<?=base_url("user/Alert/alert") ?>");
                }
            });
            
        }
    }
    

</script>

</body>
</html>