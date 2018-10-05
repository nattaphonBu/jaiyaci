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

    
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 50%;
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
}


/* Set a style for the submit button */
.btn {
    background-color: green ;
    color: while;
    padding: 20px 20px;
    border: 5px;
    cursor: pointer;
    width: 100%;
    opacity: ;
    text-align: center;
    
}

.btn:hover {
    opacity: 5;
}
</style>
</head>
<body>
        <div class="form-group"><h3>
         
        
                <button type="submit"  class="btn btn-primary"  > <h1>Hospital Form</h1></button></h3>
              </div>


</div>

<div style="max-width:500px;margin:auto">
<form id="insert">
  <div class="input-container">
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

  <div class="input-container">
        <i class="fa fa-area-chart icon"></i>
    <input class="input-field" type="text" placeholder="ตำบล" name="subdistrictId" id="subdistrictId">
    <label><span class="error">*</span></label>
  </div>


<div class="form-group">
        <button type="submit" class="btn btn-primary"></button>
      </div>
  <!-- </div> -->
    <!-- </div> -->
    </form>
  </div>
</body>
</html>

