// Search for an event
function searchEvent(keyword, lat, longi) {
	$.get( "../controllers/searchEvent.php", { kwd: keyword, latitude: lat, longitude : longi })
	  .done(function( data ) { 
	  		var json_array;
	  		if ( data == -1 ) { 
	  			json_array = {"event":[{"name":"Pas d'événement associé... Crées-en donc un !","location":"Où?","attendees":"Avec qui ?"}]};
	  		}
	  		else {
				 json_array = $.parseJSON(data);
	  		}
	  		$('#resultats').empty();
		    var template = $('#evtTempl').html(); 

			var content = Mustache.to_html(template, json_array); 	
	  	
			$('#resultats').html( content );
	        $('#events').css("display", "block");
	  });


 
}