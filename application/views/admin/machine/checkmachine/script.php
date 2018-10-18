<script>

    var map, infoWindow;
    function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        // center: new google.maps.LatLng(8.647728, 99.8960404),
    //   {lat: 8.647728, lng: 99.8960404},
    //   8.647728,99.8960404
        zoom: 12
    });
    infoWindow = new google.maps.InfoWindow;

// Try HTML5 geolocation.
    if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
        var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
        };

        infoWindow.setPosition(pos);
        infoWindow.setContent('ตำแหน่งของคุณ');
        infoWindow.open(map);
        map.setCenter(pos);
    }, function() {
        handleLocationError(true, infoWindow, map.getCenter());
    });
    } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
    }
    

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
    infoWindow.open(map);
    }
        $.post("http://localhost:8080/JaiyaSrc/api/location/findmachine", {},
            function (data, textStatus, jqXHR){
                // alert(data.message);
                var name = data.data;    
                var latitude = data.data.latitude;
                var longitude = data.data.longitude;
                name.forEach(function(name) {
                    console.log(name.latitude);
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(name.latitude, name.longitude),
                        map: map,
                        title:name.nameofmachine
                    });
                });        
        });
    // var marker = new google.maps.Marker({
    //     position: {lat: 8.647728, lng: 99.8960404},
    //     map: map,
    //     title: 'Hello World!'
    // });
        
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAykTRj0-nsj1qeU1hHLB7iIidkVRBBRQo&callback=initMap"
    async defer></script>