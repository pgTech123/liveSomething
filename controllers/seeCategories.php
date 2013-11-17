<?

	require '../models/categories.php';
	$location = $_GET['loc']; 
	
	echo json_encode(getActivities($location));

?>
