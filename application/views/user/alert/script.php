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
        let herbs = $("#alert");
        let i = 1;
        $.post("http://localhost:8080/JaiyaSrc/api/alert/insert", {},
            function (data, textStatus, jqXHR) {
                console.log(data);
                var alert = data.data;
                var stralert = "";
                $.each(alert, function( index, value ) {
                    stralert += '<tr>'
                            + '<td>'+i+'</td>'
                            + '<td>'+value.pillow+'</td>'
                            + '<td>'+value.date+'</td>'
                            + '<td>'+value.time+'</td>'
                            + '<td>'+value.rang+'</td>'
                                     
                            + '</tr>';
                            i++;            
                });
                herbs.html(stralert);  
            }
        );




   
    </script>