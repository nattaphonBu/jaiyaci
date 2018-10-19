
<body>
    <form id ="insert">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-5 col-md-offset-5">
            <div class="intro-text">
                <h1>เพิ่มข้อมูลโรงพยาบาล</h1>
            </div>  
        </div> 
            <div class="col-md-4 col-md-offset-4">
            <div class="form-group"> 
                <div class="form-group">
                    <label class="h5">ชื่อโรงพยาบาล</label><span class="error">*</span>
                    <input type="text" class="form-control" id="nameofhospital" name="nameofhospital" placeholder="ชื่อโรงพยาบาล">           
                </div>  
            </div>
            </div>
            <div class="col-md-4 col-md-offset-4">
            <div class="form-group"> 
                <div class="form-group">
                    <label class="h5">เบอโทรศัพทฺ์</label><span class="error">*</span>
                    <input type="text" class="form-control" id="tell" name="tell" placeholder="เบอโทรศัพทฺ์">           
                </div>  
            </div>
            </div>
            <div class="col-md-4 col-md-offset-4">
            <div class="form-group"> 
                <div class="form-group">
                    <label class="h5">ละติจูด</label><span class="error">*</span>
                    <input type="text" class="form-control" id="latitude" name="latitude" placeholder="ละติจูด">           
                </div>  
            </div>
            </div>
            <div class="col-md-4 col-md-offset-4">
            <div class="form-group"> 
                <div class="form-group">
                    <label class="h5">ลองติจูด</label><span class="error">*</span>
                    <input type="text" class="form-control" id="longitude" name="longitude" placeholder="ลองติจูด">           
                </div>  
            </div>
            </div>

            <div class="col-md-4 col-md-offset-4">
            <div class="form-group"> 
                <div class="form-group">
                    <label class="h5">จังหวัด</label><span class="error">*</span>
                    <select class="form-control" name="provinceId" id="provinceId">
							 <option>จังหวัด</option>
				    </select> 
            </div>
            </div>
            

            <div class="col-md-5 col-md-offset-5">
                <div class="form-group">
                    <button type="insert" class="btn-lg btn-success">บันทึก</button>
                </div>
            </div>
            
            </div>
        </div>
   
    </form>
</body>

