<?php

Class Model_Category Extends Model_Base {
	
	public function getCategories()
	{
		global $db;
		$result = $db->prepare('SELECT * FROM category ORDER BY sort');
	    $result->execute();
	    $categoriesList = $result->fetchAll();
	    return $categoriesList;
	}
	
}