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

#example1 {
    border: 10px dotted black;
    padding:35px;
    background: yellow;
}

#example2 {
    border: 10px dotted black;
    padding:35px;
    background: yellow;
    background-clip: padding-box;
}

#example3 {
    border: 10px dotted black;
    padding:35px;
    background: yellow;
    background-clip: content-box;
}
</style>
</head>
<body>
<div id="example3">
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
                            <p align="CENTER"><button class="button">ลืมรหัสผ่าน</button>&nbsp;<button class="button">สมัครสมาชิก</button></p>
						<div class="col-lg-4">
						<a class="item" href="<?=base_url("/Register/register") ?>">ลงชื่อเข้าใช้</a>
						</div>
                    </p>
                </div>
             </div>

             
		</center>
    </div>	
	</form>
</div>  

</html>
<!-- =======
<a class="item" href="<?=base_url("register/register") ?>">ลงชื่อเข้าใช้</a> -->
<!-- >>>>>>> 38df11ba8523e311bb36212a863b25eb98a652d2 -->
