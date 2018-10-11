<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
<style>
body { 
    background: lightblue url("blue-bg.png") no-repeat fixed center; 
=======
<!DOCTYPE html>                 
  <head>
    <title>Hospital</title>
    <style>
      #img_container{
        border: 10px solid yellow;
        height: 200px;
      }
      #img_container img{
        height: 100px;
      }
    </style>
  </head>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> ab1193c6c031c40be6c12f0e2755ebb892c9ce6c
    
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
<<<<<<< HEAD
    width: 50%;
=======
    width: 100%;
>>>>>>> ab1193c6c031c40be6c12f0e2755ebb892c9ce6c
    margin-bottom: 10px;
   
}

.icon {
    padding: 15px;
    background: green;
    color: white;
    min-width: 50px;
    text-align: center;
}

.input-field {
    width: 50%;
    padding: 10px;
    outline: none;
}

.input-field:focus {
    border: 2px solid black;
>>>>>>> 204bfe7c589ca9c2f7bead173a742bf8e8900c66
}
#example2 {

    border:15px #EA709E;
    padding: 30px;
    border-bottom-right-radius: 10px 20px;
    background:#A5D6F5
}

</style>
</head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
       




<div style="max-width:500px;margin:auto">
=======
        <div class="form-group"><h3>
         
        
                <button type="submit"  class="btn btn-primary"  > <h1>Hospital Form</h1></button></h3>
              </div>


>>>>>>> 204bfe7c589ca9c2f7bead173a742bf8e8900c66
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
        
    

<<<<<<< HEAD
=======
<div style="max-width:500px;margin:auto">
=======
>>>>>>> c7b62a0aa5cbcb9db7bea9e60f6150c7268dacf6
>>>>>>> ab1193c6c031c40be6c12f0e2755ebb892c9ce6c
<form id="insert">
  <!-- <div class="input-container">
    <i class="fa fa-hospital-o icon"></i>
  <input class="input-field" type="text" placeholder="ชื่อโรงพยาบาล" name="nameofhospital" id="nameofhospital" >
  <label><span class="error">*</span></label>
  </div>

  <div class="input-container">
      
        <i class="fa fa-globe icon"></i>
    <input class="input-field" type="text" placeholder="ละจิจูด" name="latijude" id="latijude">
    <label><span class="error">*</span></label>
  </div>

  <div class="input-container">
        <i class="fa fa-globe icon"></i>
    <input class="input-field" type="text" placeholder="ลองจิจูด" name="longjijude" id="longjijude">
    <label><span class="error">*</span></label>
  </div>

  <div class="input-container">
        <i class="fa fa-phone icon"></i>
    <input class="input-field" type="text" placeholder="เบอร์โทร" name="tell" id="tell">
    <label><span class="error">*</span></label>
  </div>

  <div class="input-container">
        <i class="fa fa-map icon"></i>
    <input class="input-field" type="text" placeholder="จังหวัด" name="provinceId" id="provinceId">
    <label><span class="error">*</span></label>
  </div>

  <div class="input-container">
        <i class="fa fa-area-chart icon"></i>
    <input class="input-field" type="text" placeholder="อำเภอ" name="districtId" id="districtId">
    <label><span class="error">*</span></label>
  </div>
>>>>>>> 204bfe7c589ca9c2f7bead173a742bf8e8900c66


</body>
</html>
