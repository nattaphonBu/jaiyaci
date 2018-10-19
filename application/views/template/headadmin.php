
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
      <li><a href="<?=base_url("admin/Menu/menu") ?>"><span>Home</span></a></li>
      <li><a href="<?=base_url("admin/User") ?>"><span>ผู้ใช้งานในระบบ</span></a></li>
      <li><a href="<?=base_url("admin/Machine") ?>"><span>ค้นหาตู้</span></a></li>
      <li><a href="<?=base_url("admin/Machine/checkMachine") ?>"><span>ตรวจสอบสถานะตู้</span></a></li>
      <li><a href="<?=base_url("admin/Machine/insert") ?>"><span>เพิ่มข้อมูลตู้</span></a></li>
      <li><a href="<?=base_url("admin/hospital/") ?>"><span>เพิ่มข้อมูลโรงพยาบาล</span></a></li>
      <li><a href="<?=base_url("login/logout") ?>"><span>ลงชื่อออก</span></a></li>
        
        
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
