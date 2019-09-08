<?php
include_once("form_controller.php");

class form_insert_controller extends form_controller{
	public function __construct(){
		include_once("model/model.php");
		$this->model = new model();
		
		$this->form = new form(
				"INSERT",
				array(
					new input("Table Name:", "table_name", "text", "Enter table name here..."),
					new input("Column Values:", "column_values", "text", "Enter column values here..."),
				)
			);
	}
	public function invoke($param){
	    $user_values = parent::invoke();

		$this->model->insert($user_values[0], $user_values[1]);
	}	
		
}
?>
