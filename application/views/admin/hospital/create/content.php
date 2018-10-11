<!DOCTYPE html>
<html>
<head>
<style>
body { 
    background: lightblue url("blue-bg.png") no-repeat fixed center; 
}
#example2 {

    border:0px #ff0000;
    padding: 30px;
    border-bottom-right-radius: 10px 20px;
    
}

</style>
</head>
    <title>Hospital form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
    <div id="example2">
        <div class="container">
        <button type="button" class="btn btn-primary btn-lg" >Hospital Form</button>   
        <br>
        <br>
        <br>
        
</div>   
     <div class="container">
        <form>
        <div class="row-md-4">
            <div class="form-group">
            <label for="email">ชื่อโรงพยาบาล:</label>
            <label for="user_profile"></label><span class="error">*</span>
            <input type="email" class="form-control" id="nameofhospital" placeholder="ชื่อโรงพยาบาล">
            </div>
            <div class="form-group">
            <label for="pwd">ละจิจูด:</label>
            <label for="user_profile"></label><span class="error">*</span>
            <input type="password" class="form-control" id="latijude" placeholder="ละจิจูด">
            </div>
            <div class="form-group">
            <label for="pwd">ลองจิจูด:</label>
            <label for="user_profile"></label><span class="error">*</span>
            <input type="password" class="form-control" id="longjijude" placeholder="ลองจิจูด">
            </div>
            <div class="form-group">
            <label for="pwd">เบอร์โทร:</label>
            <label for="user_profile"></label><span class="error">*</span>
            <input type="password" class="form-control" id="tell" placeholder="เบอร์โทร">
            </div>
</div>
        </form>
          <div class="col-sm">
 			    <div class="form-group">
 			    <label for="user_profile">จังหวัด</label><span class="error">*</span>
 				<select class="form-control" name="provinceId" id="provinceId">
 				<option>จังหวัด</option>
				</select>
 			</div>
 			</div>
 				 <div class="col-sm">
 					<div class="form-group">
 					<label for="user_profile">อำเภอ</label><span class="error">*</span>
 				     <select class="form-control" name="districtId" id="districtId">
 					    <option>อำเภอ</option>
					</select>
 					</div>
 				 </div>
 				 <div class="col-sm">
 					<div class="form-group">
 					<label for="user_profile">ตำบล</label><span class="error">*</span>
 					<select class="form-control" name="subdistrictId" id="subdistrictId">
 						<option>ตำบล</option>
 					</select>
 					 </div>
                  </div>
                
                    </div>
                    <button type="submit" class="btn btn-default" text-align : center>Submit</button>
                </div> 
        </div>
</div>
</body>
</html>

