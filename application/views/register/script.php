<script>
        $(function(){
            $("#insert").submit(function (e) { 
                e.preventDefault();
                var formdata = {
                    "username": $("#username").val(),
                "email": $("#email").val(),
                "password": $("#password").val(),
                // "confirmpassword": $("#confirmpassword").val(),
                "tel": $("#tel").val()
                };
                // console.log(formdata);
                $.post("http://localhost:8080/Project/api/jaiya/insert", JSON.stringify(formdata),
                    function (data, textStatus, jqXHR) {
                        alert(data.message);
                    }
                );
                    
            });
        });
    
    </script>
   
</body>
</html>