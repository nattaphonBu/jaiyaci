<!-- <script>
$(document).ready(function() {
    $('#example').DataTable( {
        "ajax": {
            "url" : base_url+"http://localhost:8080/JaiyaSrc/api/location/findprovince",
            "dataSrc": "data"
            function (data, textStatus, jqXHR){
                alert(data.message);
            });
            
        }
    } );
} );
</script> -->
<script>
        let herbs = $("#Machine");
        let i = 1;
        $.post("http://localhost:8080/JaiyaSrc/api/location/findmachine1", {},
        
            function (data, textStatus, jqXHR) {
                // console.log(data.data.status);
                var alert = data.data;
                var province =data.province;
                console.log(province);
                var stralert = "";
                $.each(alert, function( index, value ) {
                    // console.log(value.statusmachine);
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
                            i++;  
                        
                              
                });
                herbs.html(stralert);  
            }
        );




   
    </script>