console.log('loaded scripts.js');


$.getJSON("js/bris.json", function(data) {
	console.log(data);

});


start = {
  latitude: 30.849635,
  longitude: -83.24559
}
end = {
  latitude: 27.950575,
  longitude: -82.457178
}

console.log(haversine(start, end))
console.log(haversine(start, end, {unit: 'mile'}))
console.log(haversine(start, end, {unit: 'meter'}))
console.log(haversine(start, end, {threshold: 1}))
console.log(haversine(start, end, {threshold: 1, unit: 'mile'}))
console.log(haversine(start, end, {threshold: 1, unit: 'meter'}))