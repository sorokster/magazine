<?php

Class Menu {
	
	public function getMenu($label)
	{
		global $db;
		$sql = $db->prepare('SELECT * FROM menu WHERE label = "'.$label.'" ORDER BY sort');
	    $sql->execute();
	    $result = $sql->fetchAll();
	    return $result;
	}
	
}