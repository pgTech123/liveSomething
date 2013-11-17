// Ajax Call to fetch the categories

function loadCategories() {

	$.ajax( "../controllers/seeCategories.php" ).done(function(datas) {

    	    var template = $('#catTempl').html(); 
    		var content = Mustache.to_html(template, datas); 
    		$('#categorie').html('Content:' + content + " <br > " + datas);

  	}).fail(function() {
    	//alert( "error" );
  	});
}
