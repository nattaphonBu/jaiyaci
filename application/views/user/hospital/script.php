 <script>
 function search(){
   event.preventDefault();
        $("#submit").submit(function(e){
            e.preventDefault();
            conlole.log("Hello");
            var formdata = {
                "name" : $('#nameofhospital').val()
            }
            $.post("http://localhost:8080/JaiyaSrc/api/location/searchHospital", JSON.stringify(formdata),
                function (data, textStatus, jqXHR) {
                    var name = data.data;    
                    var latijude = data.data.latijude;
                    var longjijude = data.data.longjijude;
                    name.forEach(function(name) {
                    console.log(name.longjijude);
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(name.latijude, name.longjijude),
                        map: map,
                        title:name.nameofhospital
                    });
                });        
            });
        });

    };

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
        
        // $.post("http://localhost:8080/JaiyaSrc/api/location/findHostpital", {},
        //     function (data, textStatus, jqXHR){
        //         // alert(data.message);
        //         var name = data.data;    
        //         var latijude = data.data.latijude;
        //         var longjijude = data.data.longjijude;
        //         name.forEach(function(name) {
        //             console.log(name.longjijude);
        //             marker = new google.maps.Marker({
        //                 position: new google.maps.LatLng(name.latijude, name.longjijude),
        //                 map: map,
        //                 title:name.nameofhospital
        //             });
        //         });        
        // });
    // var marker = new google.maps.Marker({
    //     position: {lat: 8.647728, lng: 99.8960404},
    //     map: map,
    //     title: 'Hello World!'
    // });
        
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"
    async defer></script> 