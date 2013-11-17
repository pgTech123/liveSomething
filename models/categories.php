<?

	/**
	 * Recevoir des activités recommandées selon la localisation
	 */
	function getActivities($loc) {
		return array( "categorie" => array(
						array('name'=> 'sports'),
						array('name' => 'social'),
						array('name' => 'restauration'),
						array('name' => 'plein-air'),
						array('name' => 'culture'),
						array('name' => 'education')
					));
	}

?>