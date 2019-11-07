(function(window, mapster) {
 
    var options = mapster.MAP_OPTIONS,
        element = document.getElementById('map-canvas'),
        map = mapster.create(element, options);
 
        var marker = map.addMarker({
            lat: 60.173717,
            lng: 24.939863,
            draggable: true,
            icon: 'marker.png',
            content: '<p class=\"testings\">Text goes here pops up info window</p>',
        });
 
        var marker2 = map.addMarker({
            lat: 61.173717,
            lng: 24.939863,
            draggable: true,
            icon: 'marker.png',
            content: '\"HAHAHA DISREGARD THAT, I SUCK COCKS\"',
        });
 
})(window, window.Mapster || (window.Mapster = {}));