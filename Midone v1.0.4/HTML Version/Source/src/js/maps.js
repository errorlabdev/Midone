(function($) { 
    "use strict";

    // Google Maps
    if ($('.report-maps').length) {
        function initMap(el) {
            var iconBase = {
                url: '/dist/images/map-marker.png',

            }
            var lat = $(el).data('center').split(',')[0]
            var long = $(el).data('center').split(',')[1]
            var map = new google.maps.Map(el, {
                center: new google.maps.LatLng(lat, long),
                zoom: 7,
                styles: [{
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#f5f5f5"
                        }]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#616161"
                        }]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "color": "#f5f5f5"
                        }]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "labels",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#bdbdbd"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#eeeeee"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#757575"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#e5e5e5"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#9e9e9e"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#ffffff"
                        }]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#757575"
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#dadada"
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#616161"
                        }]
                    },
                    {
                        "featureType": "road.local",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#9e9e9e"
                        }]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#e5e5e5"
                        }]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit.station",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#eeeeee"
                        }]
                    },
                    {
                        "featureType": "transit.station",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#c9c9c9"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#e0e3e8"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#9e9e9e"
                        }]
                    }
                ],
                zoomControl: true,
                zoomControlOptions: {
                    position: google.maps.ControlPosition.LEFT_BOTTOM
                },
                streetViewControl: false,
            })

            var markers = []
            var infoWindow = new google.maps.InfoWindow({
                minWidth: 400,
                maxWidth: 400
            })
            
            $.ajax({
                url: $(el).data('sources'),
                type: "GET",
                success: function(data) {
                    var markersArray = data.map(function(markerElem, i) {
                        var point = new google.maps.LatLng(
                            parseFloat(markerElem.latitude),
                            parseFloat(markerElem.longitude));
                        var infowincontent = '<div class="font-medium">' + markerElem.name + '</div><div class="mt-1 text-gray-600">Latitude: ' + markerElem.latitude + ', Longitude: ' + markerElem.longitude + '</div>';
                        var marker = new google.maps.Marker({
                            map: map,
                            position: point,
                            icon: iconBase
                        });

                        google.maps.event.addListener(marker, 'click', function(evt) {
                            infoWindow.setContent(infowincontent);
                            google.maps.event.addListener(infoWindow, 'domready', function() {
                                $('.arrow_box')
                                    .closest('.gm-style-iw-d').removeAttr('style');
                                $('.arrow_box')
                                    .closest('.gm-style-iw-d').attr('style', 'overflow:visible');
                                $('.arrow_box')
                                    .closest('.gm-style-iw-d').parent().removeAttr('style');

                            });

                            infoWindow.open(map, marker);
                        })
                        return marker;
                    });
                    var mcOptions = {
                        styles: [{
                            width: 51,
                            height: 50,
                            textColor: 'white',
                            url: "/dist/images/map-marker-region.png",
                            anchor: [0, 0]
                        }]
                    }
                    var markerCluster = new MarkerClusterer(map, markersArray, mcOptions)
                },
                error: function(err) {
                    console.log(err)
                }
            })
        }

        $('.report-maps').each(function(key, el) {
            google.maps.event.addDomListener(window, 'load', initMap(el))
        })
    }
})($)