// Ajax Call to fetch the categories

function loadCategories() {

	$.ajax( "../controllers/seeCategories.php" ).done(function(data) {

    	    var template = "{{#categories}}{{.}}.jpg<br />{{/categories}}"; 
    	    data = data.replace('[', ''); 
    	    data = data.replace(']', '');
    	    var datas = {categories: data.split(',')}; 
    	    console.log(datas);
    		var content = Mustache.to_html(template, datas);
    		console.log(content);
    		$('#categorie').html(content);

  	}).fail(function() {
    	//alert( "error" );
  	});
}
