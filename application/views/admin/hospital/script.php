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
                            + '<td>'+value.lattiude+'</td>'
                            + '<td>'+value.longitude+'</td>'
                            + '<td>'+value.provinceId+'</td>'
                            + '<td>'+value.tell+'</td>'
                            + '<td>'
                            // +'<a href="<?=base_url("admin/hospital/update/'+value._id+'/'+value.nameofhospital+'/'+value.lattiude+'/'+value.longtitude+'/'+value.provinceId+'/'+value.tell+'/")?>">'
                            +'<a href=Hospital/update/'+value._id+'/'+value.nameofhospital+'/'+value.lattiude+'/'+value.longitude+'/'+value.provinceId+'/'+value.tell+'/">'
                            +'<button type="button" class="btn btn-warning">แก้ไข</button>'
                            +'</a>'
                            + '<td>'
                            +'<button type="button" onclick="deleted(\''+value._id+'\')" class="btn btn-danger">ลบ</button>'
                            + '</td>'
                            + '</tr>';
                            i++;              
                });
                herbs.html(stralert);  
            }
        );




   
    </script>
    <script>
    function deleted(id){
  $.ajax({
    type: "delete",
    url: "http://localhost:8080/JaiyaSrc/api/HospitalAdmin/delete",
    data: JSON.stringify({
      "id": id
    }),
    dataType: "json",
    success: function (data) {
        if(data.message == true){
            alert("ลบสำเร็จ");
            window.location.replace( href="<?=base_url("admin/Hospital") ?>");
        }else{
            alert("ลบไม่สำเร็จ");
            window.location.replace( href="<?=base_url("admin/Hospital") ?>");
        }
    }
  });
}
</script>