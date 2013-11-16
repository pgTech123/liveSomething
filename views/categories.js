// Ajax Call to fetch the categories

function loadCategories() {

	$.ajax( "../controllers/seeCategories.php" ).done(function(data) {

    	    var template = $('#catTpl').html();
    	    var datas = {categorie: data};
    	    alert(JSON.stringify(datas));
    		var html = Mustache.to_html(template, datas);
    		$('#categorie').html("Résultat: " + html);

  	}).fail(function() {
    	alert( "error" );
  	});
}
