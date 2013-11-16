<?

	/**
	 * Check if a user exists in the database
	 */
	function checkUser($login, $pwd) {

		// Connection to database is supposed to be done here 

		if ( $login == 'sws' ) {
			return true;
		}
		return false;

	}
?>
