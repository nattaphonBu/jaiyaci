
<script>
        let herbs = $("#timetogetpillow");
        let i = 1;
        $.post("http://localhost:8080/JaiyaSrc/api/", {},
            function (data, textStatus, jqXHR) {
                console.log(data);
                var timetogetpillow = data.data;
                var strHerb = "";
                $.each(timetogetpillow, function( index, value ) {
                    strHerb += '<tr>'
                            + '<td>'+i+'</td>'
                            + '<td>'+value.datetime+'</td>'
                            + '<td>'
                            + '</td>'
                            + '</tr>';
                            i++;            
                });
                herbs.html(strHerb);  
            }
        );




    
    </script>