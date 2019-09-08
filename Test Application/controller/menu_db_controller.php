<?php
include_once("controller.php");

class menu_db_controller extends controller{
	private $menu;

	public function __construct(){
		include_once("model/classes/class_menu.php");
		include_once("model/classes/class_option.php");
		
		$this->menu = new menu(
					"DATABASE FUNCTIONS",
					array(
						new option("SELECT", "form_select",  "invoke", null),
						new option("INSERT", "form_insert",  "invoke", null),
						new option("DELETE", "form_delete",  "invoke", null),
						new option("UPDATE", "form_update",  "invoke", null),
					)
				);
	}

	public function invoke($param=null){
		$menu = $this->menu;
		include('view/menu_view.php'); //display with view
	}
}

?>
