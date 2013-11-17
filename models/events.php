<?

	function searchEvents($keyword, $lat, $long) {
		if ( strtolower($keyword) == 'chasse' ) {
			return array( "event" => array(
						array('name'=> 'Chasse a cour', 'location' => 'Mont Bellevue', 'attendees' => 'Laila'),
						array('name' => 'Randonnee en foret', 'location' => 'Mont Sutto', 'attendees' => 'Laila, Jean'),
						array('name' => 'Chasse a l orignal', 'location' => 'Mont Orford', 'attendees' => 'Gilles')
					));
		}
		else {
			return array( "event" => array( 
					array('name' => 'Magasinage pour Noel', 'location' => 'Montreal', 'attendees' => 'Henri'),
					array('name' => 'Destockage de vetements d hiver', 'location' => 'Sears - Carrefour de l Estrie', 'attendees' => 'Laila'),
					array('name' => 'Destockage pour tenues de soiree', 'location' => 'Simons', 'attendees' => 'Laila')
					));
		}

	}




?>
