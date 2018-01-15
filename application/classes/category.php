<?php

Class Category {
	
	public function getCategories()
	{
		global $db;
		$result = $db->prepare('SELECT * FROM category ORDER BY sort');
	    $result->execute();
	    $categoriesList = $result->fetchAll();
	    return $categoriesList;
	}
	
}