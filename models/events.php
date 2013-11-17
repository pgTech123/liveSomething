<?

	function searchEvents($keyword, $lat, $long) {
		if ( strtolower($keyword) == 'chasser' ) {
			return array( "event" => array(
						array('name'=> 'Chasse a cour', 'location' => 'Mont Bellevue (0.3 miles)', 'attendees' => 'Laila'),
						array('name' => 'Randonnée', 'location' => 'Mont Orford (30 miles)', 'attendees' => 'Laila, Jean'),
						array('name' => 'Chasse à l orignal', 'location' => 'Acton Vale (40 miles)', 'attendees' => 'Gilles')
					));
		}
		else {
			return array( "event" => array( 
					array('name' => 'Magasinage pour Noel', 'location' => 'Centre Wellington', 'attendees' => 'Henri'),
					array('name' => 'Soldes de vetements d hiver', 'location' => 'Sears - Carrefour de l Estrie', 'attendees' => 'Laila'),
					array('name' => 'Soldes de tenues de soirée', 'location' => 'Simons - Carrefour de l Estrie', 'attendees' => 'Laila')
					));
		}

	}




?>
