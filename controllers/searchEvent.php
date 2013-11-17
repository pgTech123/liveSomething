<?

	require '../models/events.php';

	extract($_GET);

	echo json_encode(searchEvents($kwd, $latitude, $longitude));

?>