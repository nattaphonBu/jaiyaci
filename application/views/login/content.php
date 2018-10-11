
<body>
    <form id ="insert">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-5 col-md-offset-5">
            <div class="intro-text">
                <h1>Login</h1>
            </div>  
        </div> 
            <div class="col-md-4 col-md-offset-4">
             
           
            <!-- <div class="col-md-4 mb-4"> -->
                <div class="form-group"> 
                    <div class="intro-text">
                    <label class="h5">ชื่อผู้ใช้</label><span class="error">*</span>
                    <input type="text" class="form-control" id="username" name="username" placeholder="username">
                </div>
                </div>
            </div>  
            <div class="col-md-4 col-md-offset-4">
            <div class="form-group"> 
                <div class="form-group">
                    <label class="h5">รหัสผ่าน</label><span class="error">*</span>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">           
                </div>  
            </div>
            </div>
            <div class="col-md-5 col-md-offset-5">
                <div class="form-group">
                    <button type="insert" class="btn-lg btn-success">เข้าสู่ระบบ</button>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-5">
                <div class="form-group">
                    <a class=" btn btn-lg btn-info" href="<?=base_url("Register/insert") ?>"><i>สมัครสมาชิก</i></a>
                </div>
            </div>
            </div>
        </div>
    </div>
    </form>
</body>

