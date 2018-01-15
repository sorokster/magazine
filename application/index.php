<?php
// Загрузка классов "на лету"
 spl_autoload_register( function($className) {
	$filename = strtolower($className) . '.php';
	// определяем класс и находим для него путь
	$expArr = explode('_', $className);
	if(empty($expArr[1]) OR $expArr[1] == 'Base'){
		$folder = 'application/classes';			
	}else{			
		switch(strtolower($expArr[0])){
			case 'controller':
				$folder = 'application/controllers';	
				break;
				
			case 'model':					
				$folder = 'application/models';	
				break;
				
			default:
				$folder = 'application/classes';
				break;
		}
	}
	// путь до класса
	$file = $folder . '/' . $filename;
	// проверяем наличие файла
	if (file_exists($file) == false) {
		return false;
	}		
	// подключаем файл с классом
	include ($file);
});
