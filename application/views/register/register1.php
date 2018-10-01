<!DOCTYPE html>
<html lang="en">

<body>

    <form id="insert">
    <div class="card-body black bg-light">
        <center>
        
			<h1>Register</h1>
            <img src="./publish/img/pic1.png" alt="" height="200" width="200">
            <div class="col-md-4 mb-4">
                <div class="form-group">
                    <p align="LEFT">
                        <label>Username</label><span class="error">*</span>
                        <input type="text" class="form-control" id="username"  placeholder="username">
                    
                        <label>email</label><span class="error">*</span>
                        <input type="email" class="form-control" id="email" placeholder="email">
                    
                        <label>Password</label><span class="error">*</span>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    
                        <label>Confirm Password</label><span class="error">*</span>
                        <input type="password" class="form-control" id="confirmpassword" placeholder="confirm password">
                    
                        <label>Telephone</label><span class="error">*</span>
                        <input type="text" class="form-control" id="tel" placeholder="telephone">
                    
						<div class="col-lg-4">
						<button type="submit" class="btn btn-primary">Submit</button>
						</div>
                    </p>
                </div>
             </div>
		</center>
    </div>	
	</form>
    
    
    

    <!-- <form id="insert">
        Groupname: <input type="text" name="groupname" id="groupname">
        Service: <input type="text" name="service" id="service1">
                 <input type="text" name="service" id="service2">
        <input type="submit" value="send">

    </form> -->
<!-- 
    <script src="./publish/js/jquery-3.3.1.min.js"></script>
<<<<<<< HEAD:application/views/register/register1.php
    <script src="./publish/js/setup.js"></script>
    <script>
        $(function(){
            $("#insert").submit(function (e) { 
                e.preventDefault();
                var formdata = {
                    "username": $("#username").val(),
                "email": $("#email").val(),
                "password": $("#password").val(),
                // "confirmpassword": $("#confirmpassword").val(),
                "tel": $("#tel").val()
                };
                // console.log(formdata);
                $.post("http://localhost:8080/๋Jaiya/api/register/insert", JSON.stringify(formdata),
                    function (data, textStatus, jqXHR) {
                        alert(data.message);
                    }
                );
                    
            });
        });
    
    </script>
   
</body>
</html>
=======
    <script src="./publish/js/setup.js"></script> -->
    
>>>>>>> 4ea44e78a104156e32517ae1232f55b5dd23e010:application/views/register/register.php
