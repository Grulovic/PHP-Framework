<?php
include_once("controller.php");

class menu_midterm_controller extends controller{
	private $menu;

	public function __construct(){
		include_once("model/classes/class_menu.php");
		include_once("model/classes/class_option.php");
		
		$this->menu = new menu(
					"MIDTERM MENU",
					array(
						new option("ASSIGNMENTS", "assignments",  "invoke", null),
						new option("CREWS", "crews",  "invoke", ""),
						new option("PROJECTS", "projects2",  "invoke", ""),
					)
				);
	}

	public function invoke($param=null){
		$menu = $this->menu;
		include('view/menu_view.php'); //display with view
	}
}

?>
