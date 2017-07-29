console.log('loaded scripts.js');


$.getJSON("js/bris.json", function(data) {
	console.log(data);

});

if ("geolocation" in navigator) {
  console.log('geolocation available');
  navigator.geolocation.getCurrentPosition(function(position){
  	console.log(position.coords.latitude, position.coords.longitude);
  });
} else {
  console.log('geolocation not available');
}