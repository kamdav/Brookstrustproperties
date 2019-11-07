(function(window, google) {
 
    var Mapster = (function() {
        function Mapster(element, opts) {
            this.gMap = new google.maps.Map(element, opts);
        }
 
        Mapster.prototype = {
            // Events
            _event: function(opts) {
                var self = this;
                google.maps.event.addListener(opts.obj, opts.event, function(e) {
                    opts.callback.call(self, e);
                });
            },
 
            // Add marker
            addMarker: function(opts) {
                var marker;
 
                opts.position = {
                    lat: opts.lat,
                    lng: opts.lng                
                };
 
                marker = this._createMarker(opts);
 
                if (opts.event) {
                    this._event({
                        obj: marker,
                        event: opts.event.name,
                        callback: opts.event.callback
                    });
                }
 
                // Info windows
                if (opts.content) {
                    this._event({
                        obj: marker,
                        event: 'click',
                        callback: function() {
                            var infoWindow = new google.maps.InfoWindow({
                                content: opts.content
                            });
 
                            infoWindow.open(this.gMap, marker);
                        }
                    });
                }
 
                return marker;
            },
 
            _createMarker: function(opts) {
                opts.map = this.gMap;
                return new google.maps.Marker(opts)
            }
 
        };
 
        return Mapster;
    })();
 
    Mapster.create = function(element, opts) {
        return new Mapster(element, opts);
    }
 
    window.Mapster = Mapster;
 
})(window, google);