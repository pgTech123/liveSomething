// Ajax Call to fetch the categories

function loadCategories() {

	$.ajax( "../controllers/seeCategories.php" ).done(function(datas) { 
			var json_array = $.parseJSON(datas);
    	    var template = $('#catTempl').html(); 
    		var content = Mustache.to_html(template, json_array); 
    		$('#categories').html( content );

            $('.categorie').on('click', function() {
                console.log('click sur ' + $(this).attr('keyword'));
                
                var keyword = $(this).attr('keyword'); 
                searchEvent(keyword, lat, long);
                $('#activity').val(keyword);
            });
    		 
  	}).fail(function() {
    	//alert( "error" );
  	});
}
