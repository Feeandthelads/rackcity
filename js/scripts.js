console.log('loaded scripts.js');


var closestCycle;


if ("geolocation" in navigator) {
  navigator.geolocation.getCurrentPosition(function(position){
		   doSomething(position.coords.latitude,position.coords.longitude)
        });  
} else {
  console.log('no location data enabled');
}


function doSomething(latitude, longitude){
	var newLat = latitude;
	var newLong = longitude;


	start = {
		latitude: -27.481438,
		longitude: 153.014593
	}

	$.getJSON("js/bris.json", function(data) {
		var cycleArray = data;
		

			for (var i = cycleArray.length - 1; i >= 0; i--) {
			stop = {
				latitude:cycleArray[i]['latitude'],
				longitude:cycleArray[i]['longitude']
			}
			var newNumber = haversine(start,stop);

			if (typeof lowestNumber == 'undefined'){
				var lowestNumber = newNumber;
			} else{
				if(newNumber < lowestNumber){
					lowestNumber = newNumber;
					closestCycle = cycleArray[i];
			}
				
			}

	};
	console.log(closestCycle);
});

}


// start = {
//   latitude: 30.849635,
//   longitude: -83.24559
// }
// end = {
//   latitude: 27.950575,
//   longitude: -82.457178
// }

// console.log(haversine(start, end))
// console.log(haversine(start, end, {unit: 'mile'}))
// console.log(haversine(start, end, {unit: 'meter'}))
// console.log(haversine(start, end, {threshold: 1}))
// console.log(haversine(start, end, {threshold: 1, unit: 'mile'}))
// console.log(haversine(start, end, {threshold: 1, unit: 'meter'}))


// I need to:
// go through the array from bris.js, get the lat and long
// run that through my current location


