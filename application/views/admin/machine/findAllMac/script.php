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
                           if(value.status == 2){
                            let counter = 1;
                            stralert += '<tr>'
                            + '<td>'+counter+'</td>'
                            + '<td>'+value.nameofmachine+'</td>'
                            + '<td>'+value.latitude+'</td>'
                            + '<td>'+value.longitude+'</td>'
                            + '<td>'+value.districtId+'</td>'
                            + '<td>'+value.provinceId+'</td>'
                            + '<td>'
                            + '<a class="btn btn btn-danger btn-lg active" role="button" aria-disabled="true">ตู้เสีย</a>'
                            + '</td>'
                            + '</tr>';
                            counter++;
                        }   
                        if(value.status == 1){
                            let counter = 1;
                            stralert += '<tr>'
                            + '<td>'+counter+'</td>'
                            + '<td>'+value.nameofmachine+'</td>'
                            + '<td>'+value.latitude+'</td>'
                            + '<td>'+value.longitude+'</td>'
                            + '<td>'+value.districtId+'</td>'
                            + '<td>'+value.provinceId+'</td>'
                            + '<td>'
                            + '<a class="btn btn btn-success btn-lg active" role="button" aria-disabled="true">ตู้ปกติ</a>'
                            + '</td>'
                            + '</tr>';
                            counter++;
                        }   
                            i++;              
                });
                herbs.html(stralert);  
            }
        );




   
    </script>