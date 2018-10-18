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
                var user = data.data;
                var strHerb = "";
                $.each(user, function( index, value ) {
                    strHerb += '<tr>'
                            + '<td>'+i+'</td>'
                            + '<td>'+value.username+'</td>'
                            + '<td>'+value.email+'</td>'
                            + '<td>'+value.tel+'</td>'
                            + '<td>'+value.Idmachine+'</td>'
                            + '<td>'+i+'</td>'
                            + '<td>'
                            + '<a href="editherb/'+value._id+'/'+value.username+'/'+value.properties+'/'+value.warning+'" class="btn btn-info">'
                            + '<i class="far fa-edit"></i> Edit'
                            + '</a> &nbsp;'
                            // + '<a href="deleteherb/'+value._id+'" class="btn btn-danger">'
                            + '<button class="btn btn-danger" onclick="deleteUSer(\''+value._id+'\')">'
                            + '<i class="far fa-trash-alt"></i> Delete>'
                            + '</button>'
                            + '</a>'
                            + '</td>'
                            + '</tr>';
                            i++;
                });
                herbs.html(strHerb);
            }
        );




    function deleteUSer(userId){
        $.ajax({
            type:"deleteuser"
            url: "http://localhost:8080/JaiyaSrc/api/userdataadmin/delete",
            data:JSON.stringify( {
                "id" :userId
            )},
            dataType: "json",
            success:function(response){
                    alert("hello");
            }
        }
    </script>
