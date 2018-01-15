<?php
// контролер
Class Controller_Index Extends Controller_Base {
	
	public $layouts = "left_aside";
	
	function index() {
		$this->menu = new Menu();
		$Menu = $this->menu->getMenu($label = 'header_menu');
		$this->template->vars('Menu', $Menu);
		$this->category = new Category();
		$categoriesList = $this->category->getCategories();
		$this->template->vars('categoriesList', $categoriesList);
		$this->template->view('index');
	}
	
}