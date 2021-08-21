<!DOCTYPE html>
<html>
<head>
 
<title>Tracking Current Location with HTML5 Geolocation and Google Maps API</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
 
<script type="text/javascript" src="https://maps.googleapis.com/maps/AIzaSyDQLBxuRvG8RxzIKz3vV6f7LlFD9_ATKEE/js?key=AIzaSyBy3o7WBAEirMVZf4a8asdbJPLXdmvTrjw"></script>
 
</head>
<body>
 
<div id="map-canvas" style="height:100%;width:100%"></div>
 
<div>
<input type="button" onclick="trackPosition()" value="Track Me"/>
<input type="button" onclick="clearTracking()" value="Clear"/>
</div>
 
<script type="text/javascript">
var watchID;
function trackPosition(){
  if(navigator.geolocation){
    watchID =  navigator.geolocation.watchPosition(drawGoogleMap,handleError,{enableHighAccuracy: true});
  }else{
      document.getElementById('map-canvas').innerHTML = "Geolocation is not Supported for this browser/OS.";
  }
}
 
function clearTracking(){
    if(watchID>0){
        navigator.geolocation.clearWatch(watchID);
    }
}
     
function drawGoogleMap(position){
    var container = document.getElementById('map-canvas');
         
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
}
     
function handleError(error){
    var container = document.getElementById('map-canvas');
    switch(error.code) {
        case error.PERMISSION_DENIED:
            container.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            container.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            container.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            container.innerHTML = "An unknown error occurred."
            break;
    }
}
</script>
</body>
</html>