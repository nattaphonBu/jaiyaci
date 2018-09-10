<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <form id="insert">
        <center>
            <div class="col-md-4 mb-3">
                <div class="form-group">
                    <p align="LEFT">
                        <label>ID</label>
                        <input type="text" class="form-control" id="id"  placeholder="ID">
                    
                        <label>email</label>
                        <input type="email" class="form-control" id="email" placeholder="email">
                    
                        <label>Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" id="confirmpassword" placeholder="confirm password">
                    
                        <label>Telephone</label>
                        <input type="text" class="form-control" id="tel" placeholder="telephone">
                    
                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </p>
                </div>
             </div>
        </center>
    </form>

    <!-- <form id="insert">
        Groupname: <input type="text" name="groupname" id="groupname">
        Service: <input type="text" name="service" id="service1">
                 <input type="text" name="service" id="service2">
        <input type="submit" value="send">

    </form> -->
    

    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/setup.js"></script>
    <script>
        $(function(){
            $("#insert").submit(function (e) { 
                e.preventDefault();
                var formdata = {
                    "id": $("#id").val(),
                "email": $("#email").val(),
                "password": $("#password").val(),
                "confirmpassword": $("#confirmpassword").val(),
                "tel": $("#tel").val()
                };
                // console.log(formdata);
                $.post("http://localhost:8080/Project/api/jaiya/insert", JSON.stringify(formdata),
                    function (data, textStatus, jqXHR) {
                        alert(data.message);
                    }
                );
                    
            });
        });
    
    </script>
</body>
</html>