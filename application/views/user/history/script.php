
<script>
        let herbs = $("#timetogetpillow");
        let i = 1;
        $.post("http://localhost:8080/JaiyaSrc/api/history/findAll", {},
            function (data, textStatus, jqXHR) {
                
                var timetogetpillow = data.data;
                var strHerb = "";
                
                $.each(timetogetpillow, function( index, value ) {
                    if(value.iduser == iduser){

                        if(value.statustoeatpillow == 1){
                            strHerb += '<tr>'
                                + '<td>'+i+'</td>'
                                + '<td>'+value.time+'</td>'
                                + '<td>'+value.date+'</td>'
                                + '<td>'
                                + '<a class="btn btn btn-danger btn-lg active" role="button" aria-disabled="true">ไม่ได้รับประทาน</a>'
                                + '</td>'
                                + '</tr>';
                        }else{
                            strHerb += '<tr>'
                                + '<td>'+i+'</td>'
                                + '<td>'+value.time+'</td>'
                                + '<td>'+value.date+'</td>'
                                + '<td>'
                                + '<a class="btn btn btn-success btn-lg active" role="button" aria-disabled="true">รับประทานแล้ว</a>'
                                + '</td>'
                                + '</tr>';
                        }
                            i++;
                    }
                                
                });
                herbs.html(strHerb);  
            }
        );




    
    </script>