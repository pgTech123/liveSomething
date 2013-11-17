<?

	function searchEvents($keyword, $lat, $long) {
		if ( $keyword == 'Chasse') {
			return array( 
						array('name'=> 'Chasse a cour', 'location' => 'Mont Bellevue', 'attendees' => 'Laila'),
						array('name' => 'Randonnee en foret', 'location' => 'Mont Sutto', 'attendees' => 'Laila, Jean'),
						array('name' => 'Chasse a l orignal', 'location' => 'Mont Orford', 'attendees' => 'Gilles')
					);
		}
		else {
			return array( 
					array('name' => 'Souper entre amis', 'location' => 'Cafe Blabla Rue Wellington', 'attendees' => 'Henri'),
					array('name' => 'atelier gateaux', 'location' => 'Chez moi', 'attendees' => 'Laila')
					);
		}

	}




?>
