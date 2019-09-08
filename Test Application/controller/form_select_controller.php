<?php
include_once("form_controller.php");

class form_select_controller extends form_controller{
	public function __construct(){
		include_once("model/model.php");
		$this->model = new model();
		
		$this->form = new form(
				"SELECT",
				array(
					new input("Column Names:", "column_name", "text", "Enter column name here..."),
					new input("Table Name:", "table_name", "text", "Enter table name here..."),
					new input("Conditions:", "conditions", "text", "Enter conditions here..."),
				)
			);
	}
	public function invoke($param){
	    $user_values = parent::invoke();

		$table = $this->model->select_table($user_values[0], $user_values[1], $user_values[2]);
		include "view/table_view.php";	
	}	
		
}
?>
