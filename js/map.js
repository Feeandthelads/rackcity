var map;
var marker;
var pos;
var goal;
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

    goal = {
        lat: -27.4706,
        lng: 153.0170
    };

    waypts = [];

    setInterval(function() {
        updateLocation(goal,waypts);
        checkIfAtArt(pos, goal);
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

      //  console.log(pos)

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
  var roganStops = [];

  var roganStopsbeforethechange = {
    lat:closestCycle.latitude,
    lng:closestCycle.longitude
  }

  roganStops.push({
    location:roganStopsbeforethechange,
    stopover:true
  })

  var roganFinish = {
    lat: parseFloat(closestArt.Lat),
    lng: parseFloat(closestArt.Long)
  }

  var roganStart = {
    lat: start.latitude,
    lng: start.longitude
  }

  console.log(roganStart);
  console.log(roganStops);
  console.log(roganFinish);

  getDirections(roganStart, roganFinish, roganStops);

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



function checkIfAtArt(startLocation, artLocation){
  var start = {
    latitude:startLocation.lat,
    longitude:startLocation.lng
  }
  var end = {
    latitude:artLocation.lat,
    longitude:artLocation.lng
  }

    var checkIfClose = haversine(start, end)
    //console.log(checkIfClose);
    if(checkIfClose < 0.005){
      //console.log('you are within range');
      endJourney();

    } else{
      //console.log('too far away');
    }


}

function endJourney(){
  //show the model and change html to make it appropriate to go to a bike rack, or restart the process of finding art.
  $.get("../php/incart.php");
}

function startProcessAgain(){
  //streak +1
  $.get("../php/incstreak.php");

  beginSequence();
}

function goToCycleStation(){

  var pos = {

  }
//    doSomething(pos.lat, pos.lng);
    // getDirections(pos, goal, null);
  getDirectionsToCycle(pos, closestCycle);
}


function getDirectionsToCycle(current, final) {
    //Increment bike by 1
    $.get("../php/incbike.php");

    var newFinal = {
      lat:final.latitude,
      lng:final.longitude
    }

    directionsService = new google.maps.DirectionsService();
    stops = [];
    directionsService.route(
      {
      origin: current,
      destination: newFinal,
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
