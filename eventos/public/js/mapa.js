
		var map,
    points_data = [
      {'title': 'MAGREvent', 'pos': {lat: 38.3856636, lng: -0.5132717}},
      {'title': '05', 'pos': {lat: 35.65325, lng: 139.6935}}
    ];

function addMarker(d) {
  var infowindow_contents = "<div class='info_inner'>" + d.title + "</div>"
  var infowindow = new google.maps.InfoWindow({
    content: infowindow_contents
  });
  var marker = new google.maps.Marker({
    position: d.pos,
    map: map,
    title: d.title
  });
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
}

function initialize() {
  var mapOptions = {
    zoom: 17,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: {lat: 38.3856636, lng: -0.5132717}
  };
  map = new google.maps.Map(document.getElementById('map'), mapOptions);
  for (var i = 0; i < points_data.length; i++) {
    addMarker(points_data[i]);
  }
}

google.maps.event.addDomListener(window, 'load', initialize);
