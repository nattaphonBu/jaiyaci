<script> 
let herbs = $("#User");
        let i = 1;

        $.post("http://localhost:8080/JaiyaSrc/api/registernew/findAll", {},
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
                            + '<td>'
                            +'<a href=User/update/'+value._id+'/'+value.username+'/'+value.tel+'/'+value.Idmachine+'/">'
                            +'<button type="button" class="btn btn-warning">แก้ไข</button>'
                            +'</a>'
                            + '<td>'
                            +'<button type="button" onclick="deleted(\''+value._id+'\')" class="btn btn-danger">ลบ</button>'
                            + '</td>'
                            + '</tr>';
                            i++;
                });
                herbs.html(strHerb);
            }
        );
</script>

<script>
    function deleted(id){
  $.ajax({
    type: "delete",
    url: "http://localhost:8080/JaiyaSrc/api/UserDataAdmin/deleteuser",
    data: JSON.stringify({
      "id": id
    }),
    dataType: "json",
    success: function (data) {
        if(data.message == true){
            alert("ลบสำเร็จ");
            window.location.replace( href="<?=base_url("admin/User") ?>");
        }else{
            alert("ลบไม่สำเร็จ");
            window.location.replace( href="<?=base_url("admin/User") ?>");
        }
    }
  });
}
</script>