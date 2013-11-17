// Search for an event
function searchEvent(keyword, lat, longi) {
	$.get( "../controllers/searchEvent.php", { kwd: keyword, latitude: lat, longitude : longi })
	  .done(function( data ) {
	    alert( "Data Loaded: " + data );
	    var template = "{{#events}} {{name}} à {{location}} avec {{attendees}} - {{img}} {{/events}}";  
		var content = Mustache.to_html(template, datas); 
		$('#events').html(content);
	  });


 
}