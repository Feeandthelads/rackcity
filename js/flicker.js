$(document).ready(function() {
    setInterval(function(){
        setInterval(function(){
            $("h1").css({"color": "#000000"});
        }, 500);
        setInterval(function(){
            $("h1").css({"color": "cyan"});
        }, 500);
    }, 5000);
})
