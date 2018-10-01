<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="<?=base_url("/public/vendor/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?=base_url("/public/vendor/font-awesome/css/font-awesome.min.css") ?>" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?=base_url("/public/vendor/datatables/dataTables.bootstrap4.css") ?>" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?=base_url("/public/css/sb-admin.css") ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Register Jaiya</title>
</head>
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

    <script src="./publish/js/jquery-3.3.1.min.js"></script>
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