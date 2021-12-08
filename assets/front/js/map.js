google.maps.event.addDomListener(window, 'load', init);

function init() {
    
    "use strict";
	
	var mapOptions = {
        zoom: 13,
        scrollwheel: false,
        center: new google.maps.LatLng(-37.8171998, 144.9558535, 20.75)
     
    };
	
    var mapElement = document.getElementById('map'),
		map = new google.maps.Map(mapElement, mapOptions),
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(-37.8171998, 144.9558535, 20.75),
			map: map,
			title: 'edevsbd',
			icon: 'images/map-marker.png'
		});
}