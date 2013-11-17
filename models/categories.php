<?

	/**
	 * Recevoir des activités recommandées selon la localisation
	 */
	function getActivities($loc) {
		return array( "categorie" => array(
						array('name'=> 'Sports'),
						array('name' => 'Social'),
						array('name' => 'Restauration'),
						array('name' => 'Plein-air'),
						array('name' => 'Culture'),
						array('name' => 'Education')
					));
	}

?>