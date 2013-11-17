  
	/**
	*  Get a string address from coordinates
	*/
	var lat, lng;

  function success(position) {
	  geocoder = new google.maps.Geocoder();
	  lat = position.coords.latitude; 
	  long = position.coords.longitude;
	  
	  var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

	  // Reverse Geocoding of the address
	  geocoder.geocode({'latLng': latlng}, function(results, status) {
	    if (status == google.maps.GeocoderStatus.OK) {
	      if (results[1]) { 
	      	// Récupérer uniquement le nom de la ville
	      	var city_name;
	      	
	      	for ( var i=0; i < results[1].address_components.length ; ++i)  {
	      		console.log(results[1].address_components.length);
	      		if ( results[1].address_components[i].types.indexOf('locality') > -1 ) {
	      			city_name = results[1].address_components[i].long_name;
	      			break;
	      		}
	      	}

	        $('#location').html('Près de ' + city_name);
	      } else {
	        alert('No results found');
	      }
	    } else {
	      alert('Geocoder failed due to: ' + status);
	    }
	  });

}

function error(msg) {
  var s = document.querySelector('#status');
  s.innerHTML = typeof msg == 'string' ? msg : "failed";
  s.className = 'fail';
   
}
 
