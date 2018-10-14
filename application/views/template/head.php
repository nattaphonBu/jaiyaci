<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Jaiya</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<!-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png"> -->

<!-- Bootstrap -->
<link href="<?=base_url("/publish/template1/css/bootstrap.css") ?>" rel="stylesheet"> 
<link href="<?=base_url("/publish/template1/fonts/font-awesome/css/font-awesome.css") ?>" rel="stylesheet"> 

<!-- Stylesheet
    ================================================== -->
    <link href="<?=base_url("./publish/template1/css/style.css") ?>" rel="stylesheet"> 
    <link href="<?=base_url("./publish/template1/css/nivo-lightbox/nivo-lightbox.css") ?>" rel="stylesheet"> 
    <link href="<?=base_url("./publish/template1/css/nivo-lightbox/default.css") ?>" rel="stylesheet"> 
<!-- <link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css"> -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<!-- <link href="<?=base_url("/publish/template1/js/modernizr.custom.js") ?>" rel="stylesheet"> -->
<!-- <script type="text/javascript" src="js/modernizr.custom.js"></script> -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
    var username = localStorage.getItem("username");
    var iduser = localStorage.getItem("_id");
    var status = localStorage.getItem("status");
    console.log(username);
    console.log(iduser);
    if(username == null){
        // alert("ลงชื่อออกสำเร็จ");
        window.location.replace(href="<?=base_url("login") ?>");
    }
    // console.log("username");
    </script>
</head>