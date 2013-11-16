<?

	require '../models/categories.php';
	$user = $_GET['user']; 
	
	echo json_encode(getActivities($user));

?>
