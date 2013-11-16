<? 
	$p = $_GET['p'];
	switch($p) {
		case '1': // Vérifier l'existence d'un utilisateur
			include 'checkUser.php';
			break;
		case '2' : // Avoir la liste des catégories
			include 'seeCategories.php';
			break;
		case '3' : // Avoir la liste des événements
			include 'seeEvents.php';
			break;
		default:
			echo 'ok ' . $p . ' value';
			break;
	}
?>
