
<<<<<<< HEAD
    
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
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
=======
>>>>>>> c7b62a0aa5cbcb9db7bea9e60f6150c7268dacf6
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

  <div class="input-container">
        <i class="fa fa-area-chart icon"></i>
    <input class="input-field" type="text" placeholder="ตำบล" name="subdistrictId" id="subdistrictId">
    <label><span class="error">*</span></label>
  </div> -->
  <div class="row">
				 <div class="col-md-4">
					 <div class="form-group">
						 <label for="user_profile">จังหวัด</label><span class="error">*</span>
						 <select class="form-control" name="provinceId" id="provinceId">
							 <option>จังหวัด</option>
						 </select>
					 </div>
				 </div>
				 <div class="col-md-4">
					 <div class="form-group">
						 <label for="user_profile">อำเภอ</label><span class="error">*</span>
						 <select class="form-control" name="districtId" id="districtId">
							 <option>อำเภอ</option>
						 </select>
					 </div>
				 </div>
				 <div class="col-md-4">
					 <div class="form-group">
						 <label for="user_profile">ตำบล</label><span class="error">*</span>
						 <select class="form-control" name="subdistrictId" id="subdistrictId">
							 <option>ตำบล</option>
						 </select>
					 </div>
				 </div>
			 </div>

<div class="form-group">
        <button type="insert" class="btn btn-primary"></button>
      </div>
  <!-- </div> -->
    <!-- </div> -->
    </form>
  </div>
</body>
</html>

