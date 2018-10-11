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
        let herbs = $("#User");
        let i = 1;
        $.post("http://localhost:8080/JaiyaSrc/api/userdataadmin/findAllUser", {},
            function (data, textStatus, jqXHR) {
                console.log(data);
                var listOfherb = data.data;
                var strHerb = "";
                $.each(listOfherb, function( index, value ) {
                    strHerb += '<tr>'
                            + '<td>'+i+'</td>'
                            + '<td>'+value.username+'</td>'
                            + '<td>'+value.email+'</td>'
                            + '<td>'+value.tel+'</td>'
                            + '<td>'+value.Idmachine+'</td>'
                            + '<td>'
                            + '<a href="editherb/'+value._id+'/'+value.herbname+'/'+value.properties+'/'+value.warning+'" class="btn btn-info">'
                            + '<i class="far fa-edit"></i> Edit'
                            + '</a> &nbsp;'
                            + '<a href="deleteherb/'+value._id+'" class="btn btn-danger">'
                            + '<i class="far fa-trash-alt"></i> Delete'
                            + '</a>'
                            + '</td>'
                            + '</tr>';
                            i++;            
                });
                herbs.html(strHerb);  
            }
        );
    </script>