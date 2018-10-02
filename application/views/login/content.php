<!-- <<<<<<< HEAD -->
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>
<body>

    <form id="insert">
    <div class="card-body black bg-light">
        <center>
			<h1>Login</h1>
            <img src="./publish/img/cardiogram.png" alt="" height="200" width="200">
            <div class="col-md-4 mb-4">
                <div class="form-group">
                    <p align="LEFT">
                        <label>Username</label><span class="error">*</span>
                        <input type="text" class="form-control" id="username" name="username" placeholder="username">
                </div>  
            </div>
            <div class="col-md-4 mb-4">
                <div class="form-group">
                <p align="LEFT">
                        <label>Password</label><span class="error">*</span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">           
                </div>  
            </div>     
                        <br>                     
                            <p align="CENTER"><button class="button">ลืมรหัสผ่าน</button>&nbsp;<button class="button">สมัครสมาชิก</button></p>
						<div class="col-lg-4">
						<a class="item" href="<?=base_url("/Register/register") ?>">ลงชื่อเข้าใช้</a>
                        </div>
                        <div class="col-lg-4">
						<button type="insert" class="btn btn-primary">Submit</button>
						</div>
                    </p>
                </div>
             </div>

             
		</center>
    </div>	
	</form>


</html>
<!-- =======
<a class="item" href="<?=base_url("register/register") ?>">ลงชื่อเข้าใช้</a> -->
<!-- >>>>>>> 38df11ba8523e311bb36212a863b25eb98a652d2 -->
