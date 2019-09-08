<?php
include_once("controller.php");

class menu_main_controller extends controller{
	private $menu;

	public function __construct(){
		include_once("model/classes/class_menu.php");
		include_once("model/classes/class_option.php");

		$this->menu = new menu(
					"MAIN MENU",
					array(
						new option("BASIC FORM", "form_form1", "invoke", null),
						new option("DATABASE FUNCTIONS FORMS(select,delete,insert,update)", "menu_db", "invoke", null),
						new option("EMPLOYEES", "employees", "invoke", "employees"),
						new option("EMPLOYEES DATABASE", "employees", "invoke", "employees_db"),
						new option("PROJECTS DATABASE", "projects", "invoke", "projects_db"),
						new option("COMPANY DATABASE(Projects,Crews,Assignments)", "menu_midterm", "invoke", null),
						//new option("LISTBOX", "form", "invoke", "listbox"),
						new option("LOGIN (Register,Users,Messages)", "login", "invoke", null),
					)
				);
	}

	public function invoke($param=null){
		$menu = $this->menu;
		include('view/menu_view.php'); //display with view
	}
}

?>
