<script>
var username = localStorage.getItem("username");
    if(username!= null){
        window.location.replace(href="<?=base_url("login") ?>");
    }
</script>