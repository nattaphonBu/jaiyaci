
<body>
    <form id ="insert">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-5 col-md-offset-5">
            <div class="intro-text">
                <h1>ตั้งเวลากินยา</h1>
            </div>  
        </div> 
            <div class="col-md-4 col-md-offset-4">
             
           
            <!-- <div class="col-md-4 mb-4"> -->
                <div class="form-group"> 
                    <div class="intro-text">
                    <label class="h5">เวลา</label><span class="error">*</span>
                    <input type="time" class="form-control" id="time" name="time" placeholder="">
                </div>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-4">
            <div class="form-group"> 
                <div class="form-group">
                <label class="text-dark">ช่วงเวลาที่กิน</label><span class="error">*</span>
                <select class="form-control" name="rang" id="rang">
                  <option value="">ช่วงเวลาที่กิน</option>
                  <option value="ก่อนอาหาร">ก่อนอาหาร</option>
                  <option value="หลังอาหาร">หลังอาหาร</option>
                </select>      
                </div>  
            </div>
            </div>
            <div class="col-md-4 col-md-offset-4">
            <div class="form-group"> 
                <div class="form-group">
                    <label class="h5">วันเวลาที่กิน</label><span class="error">*</span>
                    <input type="date" class="form-control" id="date" name="date" placeholder="">           
                </div>  
            </div>
            </div>
            <div class="col-md-4 col-md-offset-4">
            <div class="form-group"> 
                <div class="form-group">
                    <label class="h5">ชื่อยา</label><span class="error">*</span>
                    <input type="text" class="form-control" id="pillow" name="pillow" placeholder="ชื่อยา">           
                </div>  
            </div>
            </div>
            
            
            
            <div class="col-md-5 col-md-offset-5">
                <div class="form-group">
                    <button type="insert" class="btn-lg btn-success">บันทึก</button>
                </div>
            </div>
            </div>
        </div>
    </div>
    </form>
</body>

