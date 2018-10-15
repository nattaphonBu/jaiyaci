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
        var data = {
            "iduser": $("#iduser").val()
            // "iduser": localStorage.getItem("_id")
        };
            console.log(iduser);
            
        // $.post("http://localhost:8080/JaiyaSrc/api/timetogetpillow/searchTimetogetpillow", JSON.stringify(data),
        $.post("http://localhost:8080/JaiyaSrc/api/alert/findAll", {},
            function (data, textStatus, jqXHR) {
                // console.log(data);
                var alert = data.data;
                var stralert = "";
                $.each(alert, function( index, value ) {
                    if(value.iduser == iduser){
                        if(value.statustoeatpillow == 2){
                            stralert += '<tr>'
                            + '<td>'+i+'</td>'
                            + '<td>'+value.pillow+'</td>'
                            + '<td>'+value.date+'</td>'
                            + '<td>'+value.time+'</td>'
                            + '<td>'+value.rang+'</td>'
                            + '<td>'
                            + '<a href="buttton/'+value._id+'" class="btn btn-success">'
                            + 'กินยา'
                            + '</td>'
                            + '</tr>';
                            i++;  
                        }
                    }           
                });
                herbs.html(stralert);  
            }
        );




   
    </script>