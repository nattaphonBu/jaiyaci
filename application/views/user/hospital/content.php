<!DOCTYPE html>
<html>
  <head>
    <title>ค้นหาโรงพยาบาล</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script src="<?php echo base_url() ?>publish/js/jquery-3.3.1.min.js"></script>
  </head>
  <body>
  
   
    
    <form id="form">            
    <div class="card-body black bg-light">
                    <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                          <label class="text-dark">
                          <input type="text" class="form-control" placeholder="ชื่อโรงพยาบาล" name="nameofhospital" id="name">
                        </div>
                        <div>
                            <button class = "button" id="submit" type="submit">ค้นหา</button>
                        </div>
                      </div>
                      <br>
                    </div>
                    </div> 
                  </div>
                  </form>
    <div id="map"></div>
    
</html>