<script>
// var username = localStorage.getItem(username);
localStorage.removeItem("username");

console.log(username);
// alert("ลงชื่อออกสำเร็จ");

    if(username != null){
        alert("ลงชื่อออกสำเร็จ");
        window.location.replace(href="<?=base_url("login") ?>");
    }
    // else{
    //     localStorage.removeItem("username");
    //     console.log(username);
    //     alert(username); 
    // }
</script>