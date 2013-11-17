<?

	function searchEvents($keyword, $lat, $long) {
		if ( strpos($keyword, "aventure") !== FALSE  ) {
			return array( "event" => array(
						array('name'=> 'Camping ', 'location' => 'Mont Bellevue (0.3 miles)', 'attendees' => 'Laila'),
						array('name' => 'Randonnée', 'location' => 'Mont Orford (30 miles)', 'attendees' => 'Paul, Jean'),
						array('name' => 'Chasse à l orignal', 'location' => 'Acton Vale (40 miles)', 'attendees' => 'Gilles')
					));
		}
		if ( strpos($keyword, "Magasiner") !== FALSE ) {
			return array( "event" => array( 
					array('name' => 'Magasinage pour Noel', 'location' => 'Centre Wellington', 'attendees' => 'Henri'),
					array('name' => 'Soldes de vetements d hiver', 'location' => 'Sears - Carrefour de l Estrie', 'attendees' => 'Alice Beauregard'),
					array('name' => 'Soldes de tenues de soirée', 'location' => 'Simons - Carrefour de l Estrie', 'attendees' => 'Gilbert')
					));
		}
		// Tableau vide
		// return array( "event" => ""); --> Solution la plus propre, but time is running out to make it work!
		return -1;

	}




?>
