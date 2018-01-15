<?php 

	Class Animal
	{
		public $name;
		function __construct($name)
		{
			$this->name = $name;
		}
		function getName()
		{
			return $this->name;
		}
	}
	Class Cat extends Animal
	{
		function meow()
		{
			return 'Cat '.$this->getName().' is saying meow';
		}
	}
	$cat = new Cat('Garfield');
	echo $cat->meow();
