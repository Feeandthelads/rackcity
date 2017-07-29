console.log('loaded scripts.js');


var closestCycle;

var promise = new Promise(function(resolve, reject){
	if (true) {};
});



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
					loadedCycle(cycleArray[i]);
			}
				
			}

	};
	console.log(closestCycle);
});

}

function loadedCycle(cycleArray){	
	closestCycle = cycleArray;
}
