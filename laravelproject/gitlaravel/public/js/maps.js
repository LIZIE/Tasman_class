var myCenter = new google.maps.LatLng(39.966987, -83.011920);
var marker = new google.maps.Marker({
    position: myCenter
});

function initialize() {
    var mapProp = {
        center: myCenter,
        zoom: 5,
        draggable: true,
        scrollwheel: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        panControl: true,
        zoomControl: true,
        mapTypeControl: true,
        scaleControl: true,
        streetViewControl: true,
        overviewMapControl: true,
        rotateControl: true,
    };

    var map = new google.maps.Map(document.getElementById("map-canvas"), mapProp);
    marker.setMap(map);

    google.maps.event.addListener(marker, 'click', function() {

        infowindow.setContent(contentString);
        infowindow.open(map, marker);

    });
};


google.maps.event.addDomListener(window, 'load', initialize);
