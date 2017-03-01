jQuery(document).ready(function() {
    "use strict";


    function b() {
        var a = {
                zoom: 16,
                scrollwheel: false,
                center: new google.maps.LatLng(17.9839115, -92.92395920000001),
                styles: [{
                    "featureType": "landscape",
                    "stylers": [
                        {
                            "saturation": 0
                        },
                        {
                            "lightness": 0
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "stylers": [
                        {
                            "saturation": 0
                        },
                        {
                            "lightness": 0
                        },
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "stylers": [
                        {
                            "saturation": 0
                        },
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
               
                {
                    "featureType": "road.local",
                    "stylers": [
                        {
                            "saturation": 0
                        },
                        {
                            "lightness": 0
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                            
                ]
            },
            b = document.getElementById("map"),
            c = new google.maps.Map(b, a);
        new google.maps.Marker({
            position: new google.maps.LatLng(17.9839115, -92.92395920000001),
            map: c,
            title: "Map!"
        })
    }
    google.maps.event.addDomListener(window, "load", b);

});