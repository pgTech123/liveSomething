// Search for an event
function searchEvent(keyword, lat, longi) {
	$.get( "../controllers/searchEvent.php", { kwd: keyword, latitude: lat, longitude : longi })
	  .done(function( data ) {
	  	if ( data.size == 0 ) {
	  		content = "Il n'y a pas d'événements correspondant à " + kwd + " ... Pourquoi pas le créer ?";
	  	}
	  	else { 
		    var template = $('#evtTempl').html(); 

		    var json_array = $.parseJSON(data);
			var content = Mustache.to_html(template, json_array); 	
	  	}
		$('#resultats').html(data + content);
        $('#events').css("display", "block");
	  });


 
}