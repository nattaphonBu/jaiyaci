
<script>
        let herbs = $("#timetogetpillow");
        let i = 1;
        $.post("http://localhost:8080/JaiyaSrc/api/", {},
            function (data, textStatus, jqXHR) {
                console.log(data);
                var user = data.data;
                var strHerb = "";
                $.each(user, function( index, value ) {
                    strHerb += '<tr>'
                            + '<td>'+i+'</td>'
                            + '<td>'+value.datetime+'</td>'
                            + '<td>'
                            + '<a href="editherb/'+value._id+'/'+value.username+'/'+value.properties+'/'+value.warning+'" class="btn btn-info">'
                            + '<i class="far fa-edit"></i> Edit'
                            + '</a> &nbsp;'
                            // + '<a href="deleteherb/'+value._id+'" class="btn btn-danger">'
                            + '</button>'
                            + '</a>'
                            + '</td>'
                            + '</tr>';
                            i++;            
                });
                herbs.html(strHerb);  
            }
        );




    
    </script>