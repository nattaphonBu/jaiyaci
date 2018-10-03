<!DOCTYPE html>                 
  <head>
    <title>Centre Things</title>
    <style>
      #img_container{
        border: 1px solid grey;
        height: 250px;
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
    width: 100%;
    margin-bottom: 15px;
}

.icon {
    padding: 10px;
    background: green;
    color: white;
    min-width: 50px;
    text-align: center;
}

.input-field {
    width: 100%;
    padding: 10px;
    outline: none;
}

.input-field:focus {
    border: 2px solid green;
}

/* Set a style for the submit button */
.btn {
    background-color: green ;
    color: gray;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
</style>
</head>
<body>
        <div class="form-group">
                <button type="submit" class="btn btn-primary"> Hospital Form</button>
              </div>

</div>

<form action="/action_page.php" style="max-width:500px;margin:auto">
 
  <div class="input-container">
    <i class="fa fa-hospital-o icon"></i>
    <label><input class="input-field" type="text" placeholder="ชื่อโรงพยาบาล" name="" ></label>
    
    
  </div>

  <div class="input-container">
      
        <i class="fa fa-globe icon"></i>
    <input class="input-field" type="text" placeholder="ละจิจูด" name="ละจิจูด">
    <label><span class="error">*</span></label>
  </div>

  <div class="input-container">
        <i class="fa fa-globe icon"></i>
    <input class="input-field" type="text" placeholder="ลองจิจูด" name="ลองจิจูด">
  </div>

  <div class="input-container">
        <i class="fa fa-phone icon"></i>
    <input class="input-field" type="text" placeholder="เบอร์โทร" name="เบอร์โทร">
  </div>

  <div class="input-container">
        <i class="fa fa-area-chart icon"></i>
    <input class="input-field" type="text" placeholder="ตำบล" name="ตำบล">
  </div>

  <div class="input-container">
        <i class="fa fa-area-chart icon"></i>
    <input class="input-field" type="text" placeholder="อำเภอ" name="อำเภอ">
  </div>

  <div class="input-container">
        <i class="fa fa-map icon"></i>
    <input class="input-field" type="text" placeholder="จังหวัด" name="จังหวัด">
  </div>
 
</form>
<div class="form-group">
        <button type="submit" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
    </form>
</body>
</html>

