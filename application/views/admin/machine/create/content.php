<!DOCTYPE html>
<html lang="en">
<head>
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>
<body>

    <form id="insert">
    <div class="card-body black bg-light">
        <center>
			<h1>Create Machine</h1>
            <img src="./publish/img/book.png" alt="" height="200" width="200">
            <div class="col-md-4 mb-4">
                <div class="form-group">
                    <p align="LEFT">
                        <label>ID</label><span class="error">*</span>
                        <input type="text" class="form-control" id="ID" name="ID" placeholder="ID">
                </div>  
            </div>
            <div class="col-md-4 mb-4">
                <div class="form-group">
                <p align="LEFT">
                        <label>User ID</label><span class="error">*</span>
                        <input type="text" class="form-control" id="userid" name="userid" placeholder="userid">           
                </div>  
            </div>
            <div class="col-md-4 mb-4">
                <div class="form-group">
                <p align="LEFT">
                        <label>Name Machine</label><span class="error">*</span>
                        <input type="text" class="form-control" id="nameofmachine" name="nameofmachine" placeholder="nameofmachine">           
                </div>  
            </div>
            <div class="col-md-4 mb-4">
                <div class="form-group">
                <p align="LEFT">
                        <label>Latitude</label><span class="error">*</span>
                        <input type="text" class="form-control" id="latitude" name="latitude" placeholder="latitude">           
                </div>  
            </div>
            <div class="col-md-4 mb-4">
                <div class="form-group">
                <p align="LEFT">
                        <label>Longitude</label><span class="error">*</span>
                        <input type="text" class="form-control" id="longitude" name="longitude" placeholder="longitude">           
                </div>  
            </div>
            <div class="col-md-4 mb-4">
                <div class="form-group">
                <p align="LEFT">
                        <label>Province</label><span class="error">*</span>
                        <input type="text" class="form-control" id="province" name="province" placeholder="province">           
                </div>  
            </div>
            <div class="col-md-4 mb-4">
                <div class="form-group">
                <p align="LEFT">
                        <label>District</label><span class="error">*</span>
                        <input type="text" class="form-control" id="district" name="district" placeholder="district">           
                </div>  
            </div>
            <div class="col-md-4 mb-4">
                <div class="form-group">
                <p align="LEFT">
                        <label>Subdistricts</label><span class="error">*</span>
                        <input type="text" class="form-control" id="subdistricts" name="subdistricts" placeholder="subdistricts">           
                </div>  
            </div>
        </center>
    </div>	
	</form>
</html>

