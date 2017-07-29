var map;
var marker;
var pos;
var waypts;
var directionsDisplay;
var directionsService;

function initMap() {

    console.log("Initialising map");

    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -34.397, lng: 150.644},
      gestureHandling: 'cooperative',
      scrollwheel: false,
      styles: [
          ]
    });
    var bikeLayer = new google.maps.BicyclingLayer({});
        bikeLayer.setMap(map);
    directionsDisplay = new google.maps.DirectionsRenderer();
    directionsDisplay.setMap(map);

    updateLocation(goal,waypts);

    var goal = {
        lat: -27.4706,
        lng: 153.0170
    };

    waypts = [];

    setInterval(function() {
        updateLocation(goal,waypts);
    }, 1500);

  }

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
  infoWindow.open(map);
}

function updateLocation(dest, way) {
  infoWindow = new google.maps.InfoWindow;

  // Try HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };

        if(marker == null) {
          map.setCenter(pos);
          marker = new google.maps.Marker({
            position: pos,
            map: map
          });
        } else {
          marker.setPosition(pos);
          if (dest != null && directionsService == null) {
            getDirections(pos, dest, way)
          }
        }
      }, function() {
        handleLocationError(true, infoWindow, map.getCenter());
      });
    } else {
      // Browser doesn't support Geolocation
      handleLocationError(false, infoWindow, map.getCenter());
    }
}

function curryPot(closestCycle, closestArt, start){
  var roganStops = [{
    lat:closestCycle.latitude,
    lng:closestCycle.longitude
  }]

  var roganFinish = {
    lat: closestArt.Lat,
    lng: closestArt.Long
  }



 var start = {
        lat: -27.4706,
        lng: 153.0170
    };

    console.log(start);
  console.log(roganStops);
  console.log(roganFinish);


  getDirections(start, roganFinish, roganStops)

}


function getDirections(current, final, stops) {
    directionsService = new google.maps.DirectionsService();
    directionsService.route(
      {
      origin: current,
      destination: final,
      travelMode: 'BICYCLING',
      unitSystem:  google.maps.UnitSystem.METRIC,
      waypoints: stops,
      optimizeWaypoints: true,
      provideRouteAlternatives: false,
      }, function(response, status) {
        if (status == 'OK') {
          directionsDisplay.setDirections(response);
        } else {
          window.alert('Directions request failed due to ' + status);
        }
    });


}

