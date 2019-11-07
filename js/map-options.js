(function(window, google, mapster) {
 
    mapster.MAP_OPTIONS = {
        center: {
            lat: 60.173717,
            lng: 24.939863
        },
        zoom: 8,
        maxZoom: 11,
        minZoom: 5,
        disableDefaultUI: false,
        zoomControlOptions: {
            position: google.maps.ControlPosition.TOP_LEFT,
            style: google.maps.ZoomControlStyle.SMALL
        },
        panControl: false,
        panControlOptions: {
            position: google.maps.ControlPosition.TOP_LEFT
        },
        scrollwheel: false,
        draggable: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP        
    };
 
})(window, google,  window.Mapster || (window.Mapster = {}));