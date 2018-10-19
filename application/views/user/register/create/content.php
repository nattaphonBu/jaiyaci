
<body>
<form id ="insert">
<div class="container-fluid">
    <div class="row">
    <div class="col-md-5 col-md-offset-5">
        <div class="intro-text">
            <h1>สมัครเข้าใช้งาน</h1>
        </div>  
    </div> 
        <div class="col-md-4 col-md-offset-4">
            <div class="form-group"> 
                <div class="intro-text">
                <label class="h5">ชื่อผู้ใช้</label><span class="error">*</span>
                <input type="text" class="form-control" id="username" name="username" placeholder="ชื่อผู้ใช้" >
            </div>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-4">
        <div class="form-group"> 
            <div class="form-group">
                <label class="h5">พาสเวิด</label><span class="error">*</span>
                <input type="password" class="form-control" id="password" name="password" placeholder="รหัสผ่าน">           
            </div>  
        </div>
        </div>
        <div class="col-md-4 col-md-offset-4">
        <div class="form-group"> 
            <div class="form-group">
                <label class="h5">ยืนยันพาสเวิด</label><span class="error">*</span>
                <input type="password" class="form-control" id="confirmpassword" name="confirmpassword"placeholder="ยืนยันรหัสผ่าน">           
            </div>  
        </div>
        </div>
        <div class="col-md-4 col-md-offset-4">
        <div class="form-group"> 
            <div class="form-group">
                <label class="h5">อีเมล</label><span class="error">*</span>
                <input type="email" class="form-control" id="อีเมล" name="อีเมล" placeholder="อีเมล" >           
            </div>  
        </div>
        </div>
        <div class="col-md-4 col-md-offset-4">
        <div class="form-group"> 
            <div class="form-group">
                <label class="h5">เบอร์โทรศัพท์</label><span class="error">*</span>
                <input type="text" class="form-control" id="tel" name="tel" placeholder="เบอร์โทรศัพท์">           
            </div>  
        </div>
        </div>
        <!-- <div class="col-md-4 col-md-offset-4">
        <div class="form-group"> 
            <div class="form-group">
                <label class="h5">ตู้ยา</label><span class="error">*</span>
                <input type="text" class="form-control" id="Idmachine" name="Idmachine" placeholder=""value="<?php echo $Idmachine?>">           
            </div>  
        </div>
        </div> -->
        
        
        
        <div class="col-md-5 col-md-offset-5">
            <div class="form-group">
                <button type="insert" class="btn-lg btn-success">บันทึก</button>
            </div>
        </div>
        </div>
    </div>
</div>
</form>
</body>

