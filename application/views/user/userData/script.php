
<script>
        $.post("http://localhost:8080/JaiyaSrc/api/UserDataAdmin/findAllUserdata", {},
            function (data, textStatus, jqXHR) {
                // console.log(data);
                var userdata = data.data.status;
                var stralert = "";
                $.each(userdata, function( index, value ) {
                    console.log(userdata);
                    if(value.iduser == iduser){
                        if(value.status == 1){
                           
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