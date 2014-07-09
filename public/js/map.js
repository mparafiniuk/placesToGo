$(document).ready(function() {
    var map;
    map_initialize(); 

    function map_initialize(){
        
        var MapOptions = 
        { 
            center: new google.maps.LatLng(50.0468,20.0051), 
            zoom: 11, 
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        
        map = new google.maps.Map(document.getElementById("googleMap"), MapOptions);     
        
        google.maps.event.addListener(map, 'rightclick', function(event) {
        var marker = new google.maps.Marker({
            position: event.latLng, //map Coordinates where user right clicked
            map: map,
            draggable:true, //set marker draggable 
            animation: google.maps.Animation.DROP, //bounce animation
            title:"Hello World!"
        });
    });
    }
});

