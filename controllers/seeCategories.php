<?

	require '../models/categories.php';
	$location = $_GET['loc']; 
	
	echo json_encode(array("categories" => getActivities($location)));

?>
