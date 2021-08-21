<!DOCTYPE html>
<html>
<head>
 
<title>Tracking Current Location with HTML5 Geolocation and Google Maps API</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
 
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBy3o7WBAEirMVZf4a8asdbJPLXdmvTrjw"></script>
 
</head>
<body>
 
<div id="map-canvas" style="height:100%;width:100%"></div>
 
<script>
//JavaScript Code goes here...
window.onload = function(){
  var container = document.getElementById('map-canvas');
  if(navigator.geolocation){
     
    navigator.geolocation.getCurrentPosition(function(position){
         
        var latitude = position.coords.latitude,
            longitude = position.coords.longitude;
        var map,
            mapOptions = {
               zoom: 15,
               center: {lat: latitude,lng: longitude},
               mapTypeId: google.maps.MapTypeId.ROADMAP
            };
        map = new google.maps.Map(container,mapOptions);
         
        var geolocate = new google.maps.LatLng(latitude,longitude);
         
        var infowindow  = new google.maps.InfoWindow({
            map: map,
            position: geolocate,
            content: 
                    '<h1>Your Current Location is:</h1>'+
                    '<h2>Latitude: '+latitude+'</h2>'+
                    '<h2>Longitude: '+longitude+'</h2>'
        });
    },handleError);
     
    function handleError(error){
      //Handle Errors
    }
  }else{
      container.innerHTML = "Geolocation is not Supported for this browser/OS.";
  }
};
</script>
</body>
</html>