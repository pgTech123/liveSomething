// Ajax Call to fetch the categories

function loadCategories() {

	$.ajax( "../controllers/seeCategories.php" ).done(function(datas) { 
			var json_array = $.parseJSON(datas);
    	    var template = $('#catTempl').html(); 
    		var content = Mustache.to_html(template, json_array); 
    		$('#categories').html( content );

  	}).fail(function() {
    	//alert( "error" );
  	});
}
