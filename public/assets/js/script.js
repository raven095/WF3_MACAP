var locationLat=0;
var locationLng=0;
var adressValue = '';

jQuery('#map').hide();

function initMap() {

    jQuery('#button').click(function (event){
        adressValue = jQuery('#address').val();
        jQuery('#map').show();

        jQuery.get( "https://maps.googleapis.com/maps/api/geocode/json?address="+ adressValue+"&key=AIzaSyAs9-9EPpqbSPCd1_r5_lgpmNjc6EuR6Xg", function(json, textStatus) {
            locationLat = json.results[0].geometry.location.lat;
            locationLng = json.results[0].geometry.location.lng;

            var concours = {lat: 49.5030743, lng: 6.2818691};
            var pos = {lat: locationLat, lng: locationLng};

            var styleArray = [
                {
                    featureType: "all",
                    stylers: [
                        { saturation: -80 }
                    ]
                },{
                    featureType: "road.arterial",
                    elementType: "geometry",
                    stylers: [
                        { hue: "#00ffee" },
                        { saturation: 50 }
                    ]
                },{
                    featureType: "poi.business",
                    elementType: "labels",
                    stylers: [
                        { visibility: "off" }
                    ]
                }
            ];

            var map = new google.maps.Map(document.getElementById('map'), {
                center: concours,
                scrollwheel: true,
                zoom: 6
            });

            var directionsDisplay = new google.maps.DirectionsRenderer({
                map: map
            });

            // Set destination, origin and travel mode.
            var request = {
                destination: concours,
                origin: pos,
                travelMode: google.maps.TravelMode.DRIVING
            };

            // Pass the directions request to the directions service.
            var directionsService = new google.maps.DirectionsService();
            directionsService.route(request, function(response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    // Display the route on the map.
                    directionsDisplay.setDirections(response);
                }
            });
        } );
    });

    var posStat = {lat: 49.6119523, lng: 6.075476500000036};

    var styleArray = [
        {
            featureType: "all",
            stylers: [
                { saturation: -80 }
            ]
        },{
            featureType: "road.arterial",
            elementType: "geometry",
            stylers: [
                { hue: "#00ffee" },
                { saturation: 50 }
            ]
        },{
            featureType: "poi.business",
            elementType: "labels",
            stylers: [
                { visibility: "off" }
            ]
        }
    ];

    var map2 = new google.maps.Map(document.getElementById('mapStatic'), {
        center: posStat,
        scrollwheel: true,
        zoom: 16
    });

    var marker = new google.maps.Marker({
        position: posStat,
        map: map2
    });
}


/* Activation du scroll to top 
document.addEventListener("scroll", yScroll);

function yScroll() {

  var yPos = window.pageYOffset;

  if (yPos > 10) {
    document.getElementById("top-btn").style.bottom = "10px";
  } else {
    document.getElementById("top-btn").style.bottom = "-50px";
  }
}

function ScrollTop() {

  var i = window.pageYOffset;

  var intervalTimer = setInterval(function() {
    if (i > 0) {
      window.scrollTo(0, i);
      i -= 15;
    } else {
      document.getElementById("top-btn").style.bottom = "-50px";
      clearInterval(intervalTimer);
    }
  }, 0.5);
}
*/