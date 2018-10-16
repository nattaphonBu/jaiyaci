<!DOCTYPE <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ลงทะเบียนบัญชีผู้ใช้</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
  <style type="text/css">
body {
    background-color: lightblue;
}
.form-style-3{
    max-width: 450px;
    font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-3 label{
    display:block;
    margin-bottom: 50px;
    float: center;
}
.form-style-3 label > span{
    float: left;
    width: 100px;
    color: #000000;
    font-weight: bold;
    font-size: 15px;
    text-shadow: 2px 2px 2px #F5FFFA;
    float: center;
}
.form-style-3 fieldset{
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    margin: 2px 2px 10px 2px;
    border: 1px solid #00CCFF;
    padding: 20px;
    background: #F5FFFA;
    box-shadow: inset 0px 0px 15px #FFE5E5;
    -moz-box-shadow: inset 0px 0px 15px #FFE5E5;
    -webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
    float: center;
}

.form-style-3 input[type=text],
.form-style-3 input[type=date],
.form-style-3 input[type=datetime],
.form-style-3 input[type=number],
.form-style-3 input[type=search],
.form-style-3 input[type=time],
.form-style-3 input[type=url],
.form-style-3 input[type=email],
.form-style-3 select, 
.form-style-3 textarea{
    border-radius: 6px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border: 1px solid #FFC2DC;
    outline: none;
    /* ตัวหนังสือในช่องกรอก */
    color: #000000; 
    padding: 5px 8px 5px 8px;
    box-shadow: inset 20px 2px 4px #000000;
    -moz-box-shadow: inset 4px 4px 4px #00CCFF;
    /* สีในกรอบที่เบลอๆ */
    -webkit-box-shadow: inset 5px 5px 4px #33FFFF;
    /* พื้นหลังในช่องกรอกข้อมูล */
    background: #AFEEEE;
    width:150%;
    float: center;

}
/* ดอกจัน */
.required{
    color:red;
    font-weight:normal;
}

img {
    border: 0px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 150px;
}
</style>
</head>
<body>
<br>
<br>
<br>
<br>
<center>
<img src="https://img.live/images/2018/10/15/note.png" alt="note.png"  />
</center>


</head>
<body>
<center>
<div class="form-style-3">
<form id="insert">
<br>
<fieldset><legend>สมัครสมาชิก</legend>
<label for="field1"><span>Username<span class="required">*</span></span><input type="text" class="input-field" name="username" id="username" value="" /></label>
<label for="field2"><span>Password<span class="required">*</span></span><input type="password" class="input-field" name="password"  id="password" value="" /></label>
<label for="field3"><span>ConfirmPassword<span class="required">*</span></span><input type="password" class="input-field" name="confirmPassword" id="confirmPassword" value="" /></label>
<label for="field3"><span>Email <span class="required">*</span></span><input type="email" class="input-field" name="email" id="email" value="" /></label>
<label for="field3"><span>Tell<span class="required">*</span></span><input type="text" class="input-field" name="tel" id="tel" value="" /></label>
<div class="col-md-5 col-md-offset-5">
                <div class="form-group">
                    <button type="insert" class="btn-lg btn-success">บันทึก</button>
                </div>
            </div>
<!-- <option value="Appointment">Appointment</option>
<option value="Interview">Interview</option>
<option value="Regarding a post">Regarding a post</option> -->
</select></label>
</fieldset>

</form>
</div>
</center>
</body>
</html>
    
    




    


    
    

     


     