
<body>
    <form id ="login">
</div>
    <div class="row justify-content-md-center">
        <div class="col-md-4 mb-4">
            <div class="form-group">
                
                    <label class="">ชื่อผู้ใช้</label><span class="error">*</span>
                    <input type="text" class="form-control" id="username" name="username" placeholder="username">
            </div>  
        </div>
    </div>
        <div class="row justify-content-md-center">
        <div class="col-md-4 mb-4">
            <div class="form-group">
                    <label class="">รหัสผ่าน</label><span class="error">*</span>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">           
            </div>  
        </div>    
    </div>
    <div class="row justify-content-md-center">
    <button type="insert" class="btn-lg btn-success">เข้าสู่ระบบ</button>
</div>
<br>
<div class="row justify-content-md-center">
    <div>
        <a class=" btn btn-lg btn-info" href="<?=base_url("Register/insert") ?>">
            <i>สมัครสมาชิก</i>
        </a>
    </div>
    <!-- <div>
    <button type="button" class="btn-lg btn-danger">forgot password</button>
    </div> -->
</div>
    </section> 
</form>
</div>
</body>

</html>