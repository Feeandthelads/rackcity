console.log('loaded scripts.js');

$.getJSON("brisbanecycle.json", function(json) {
    console.log(json); // this will show the info it in firebug console
});