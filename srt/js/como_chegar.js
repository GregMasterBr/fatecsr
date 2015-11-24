$(document).ready( function(e) {
	event.preventDefault()

	if(navigator.geolocation) {
	navigator.geolocation.getCurrentPosition(function(position) {

	var pos = new google.maps.LatLng(position.coords.latitude,
					position.coords.longitude);

	var geocoder = new google.maps.Geocoder();

	geocoder.geocode({'latLng': pos}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {

			var result = results[0].formatted_address;
			//alert(result);
			$('#add-location').val(result);

		}
	});


	}, function() {
	handleNoGeolocation(true);
	});
	} else {
	// O browser não suporta geolocalização :(
	handleNoGeolocation(false);
	}


});
