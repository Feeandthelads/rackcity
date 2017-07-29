var map;
var marker;
var pos;

function initMap() {
    console.log("initialising map");
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
    updateLocation();

    setInterval(function() {
        updateLocation();
    }, 1500);
  }

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
  infoWindow.open(map);
}

function updateLocation() {
  infoWindow = new google.maps.InfoWindow;

  var first = false;

  if (marker == null) {
    first = true;
  }

  // Try HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };

        console.log(pos);

        if(first == true) {
          map.setCenter(pos);
          marker = new google.maps.Marker({
            position: pos,
            map: map
          });
        } else {
          marker.setPosition(pos);
        }
      }, function() {
        handleLocationError(true, infoWindow, map.getCenter());
      });
    } else {
      // Browser doesn't support Geolocation
      handleLocationError(false, infoWindow, map.getCenter());
    }
}
