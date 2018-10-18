
<body>
    <form id ="insert">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-5 col-md-offset-5">
            <div class="intro-text">
                <h1>Create Machine</h1>
            </div>  
        </div> 
            <div class="col-md-4 col-md-offset-4">
            <div class="form-group"> 
                <div class="form-group">
                    <label class="h5">หมายเลขเครื่อง</label><span class="error">*</span>
                    <input type="text" class="form-control" id="nameofmachine" name="nameofmachine" placeholder="หมายเลขเครื่อง">           
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
                    <input type="text" class="form-control" id="longjijude" name="longjijude" placeholder="ลองติจูด">           
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

