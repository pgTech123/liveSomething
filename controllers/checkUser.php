<?

	require '../models/user.php';
	$user = $_GET['user'];
	$pwd = "";
	if ( checkUser($user, $pwd) ) {
		echo json_encode(array('result' => 'ok')); 
		return;
	} 

	echo json_encode(array('result' => 'ko'));

?>
