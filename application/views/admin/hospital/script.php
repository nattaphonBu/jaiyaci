<script>
        let herbs = $("#Hospital");
        let i = 1;
        
        $.post("http://localhost:8080/JaiyaSrc/api/HospitalAdmin/findAll", {},
            // alert(data.message);
            function (data, textStatus, jqXHR) {
                // console.log(data);
                var alert = data.data;
                var stralert = "";
                $.each(alert, function( index, value ) {           
                            stralert += '<tr>'
                            + '<td>'+i+'</td>'
                            + '<td>'+value.nameofhospital+'</td>'
                            + '<td>'+value.latitude+'</td>'
                            + '<td>'+value.longitude+'</td>'
                            + '<td>'+value.provinceId+'</td>'
                            + '<td>'+value.tell+'</td>'
                            + '<td>'
                            + '<a class="btn btn btn-warning btn-lg active" role="button" aria-disabled="true">แก้ไข</a>'
                            + '</td>'
                            + '<td>'
                            + '<a class="btn btn btn-danger btn-lg active" role="button" aria-disabled="true">ลบ</a>'
                            + '</td>'
                            + '</tr>';
                            i++;              
                });
                herbs.html(stralert);  
            }
        );




   
    </script>