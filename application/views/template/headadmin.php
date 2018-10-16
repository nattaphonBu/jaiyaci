
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"><i class="fa fa-play fa-rotate-270"></i> Jaiya</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="<?=base_url("user/Menu/menu") ?>"><span>Home</span></a></li>
						<li><a href="<?=base_url("user/Alert/Alert") ?>"><span>แจ้งเตือน</span></a></li>
						<li><a href="<?=base_url("user/Userdata/insert") ?>"><span>บัญชีผู้ใช้</span></a></li>
						<li><a href="<?=base_url("user/History") ?>"><span>ประวัติการกินยา</span></a></li>
						<li><a href="<?=base_url("user/Hospital") ?>"><span>ค้นหาโรงพยาบาล</span></a></li>
						<li><a href="<?=base_url("user/Timetogetpillow/insert") ?>"><span>ตั้งเวลากินยา</span></a></li>
						<li><a href="<?=base_url("login/logout") ?>"><span>ลงชื่อออก</span></a></li>
        
        
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
