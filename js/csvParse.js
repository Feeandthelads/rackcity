$.get("js/publicart.csv", function(text){
     var data = Papa.parse(text, {header: true});
     console.log(data);
});




