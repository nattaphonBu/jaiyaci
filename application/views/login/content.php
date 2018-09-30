<!DOCTYPE html>
<html lang="en">

<body>

    <form id="insert">
    <div class="card-body black bg-light">
        <center>
        
			<h1>Login</h1>
            <img src="./publish/img/cardiogram.png" alt="" height="200" width="200">
            <div class="col-md-4 mb-4">
                <div class="form-group">
                    <p align="LEFT">
                        <label>Username</label><span class="error"></span>
                        <input type="text" class="form-control" id="username"  placeholder="username">

                        <label>Password</label><span class="error"></span>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    
                        <br>
                    
                        
                    <button>ลืมรหัสผ่าน</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button>สมัครสมาชิก</button>
						<div class="col-lg-4">
						<a class="item" href="<?=base_url("/Register/register") ?>">ลงชื่อเข้าใช้</a>
						</div>
                    </p>
                </div>
             </div>
		</center>
    </div>	
	</form>
    


