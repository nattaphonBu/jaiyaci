<script>
        let herbs = $("#Machine");
        let i = 1;
        
        $.post("http://localhost:8080/JaiyaSrc/api/location/findmachine1", {},
            // alert(data.message);
            function (data, textStatus, jqXHR) {
                // console.log(data);
                var alert = data.data;
                var stralert = "";
                $.each(alert, function( index, value ) {
                            let counter = 1;
                            stralert += '<tr>'
                            + '<td>'+counter+'</td>'
                            + '<td>'+value.nameofmachine+'</td>'
                            + '<td>'+value.latitude+'</td>'
                            + '<td>'+value.longitude+'</td>'
                            + '<td>'+value.provinceId+'</td>'
                            + '</tr>';
                            counter++;  
                            i++;              
                });
                herbs.html(stralert);  
            }
        );




   
    </script>