function initMap() {
	if (typeof(google) === 'object') {
		buildMap();
	} else {
		$.getScript('http://maps.google.com/maps/api/js?sensor=false&async=1&callback=buildMap');
	}
}

function buildMap() {
	var $mapContainer = $('#headOfficeMap');
	$mapContainer.empty();
	var myLatLng = new google.maps.LatLng(headOfficeLat, headOfficeLng);
	var map = new google.maps.Map($mapContainer.get(0), {
		center: myLatLng,
		scrollwheel: false,
		zoom: headOfficeZoom,
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	});

	var marker = new google.maps.Marker({
		map: map,
		position: myLatLng,
		title: 'Head Office Map'
	});

	var infoWindow = new google.maps.InfoWindow({
		content : headOfficeAddress
	});

	google.maps.event.addListener(marker, 'click', function() {
		infoWindow.open(map, marker);
	});
}