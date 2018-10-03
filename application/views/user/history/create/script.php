hisorygetpillowId
<script>
    $("#insert").submit(function(){
        createhistory();
    })


    function createhistory(){
        event.preventDefault();
        var isValid = $("#insert").valid();
        var data = {
                "hisorygetpillowId": $("#hisorygetpillowId").val(),
                "timetogetpillowId": $("#timetogetpillowId").val(),
                "status": $("#status").val()
            };
        if(isValid){
            var data = $("#insert").serialize();
            // $.post("http://localhost:8080/JaiyaSrc/api/register/insert", JSON.stringify(data),
            function(data){
                alert(data.message);
            });
            
        }
    }
    

</script>
</script>