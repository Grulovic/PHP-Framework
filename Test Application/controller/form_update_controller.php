<?php
include_once("form_controller.php");

class form_update_controller extends form_controller{
	public function __construct(){
		include_once("model/model.php");
		$this->model = new model();
		
		$this->form = new form(
				"UPDATE",
				array(
					new input("Table Name:", "table_name", "text", "Enter table name here..."),
					new input("Column Name/Value:", "column_name_value", "text", "Enter column name/value here..."),
					new input("Condition:", "condition", "text", "Enter condition here..."),
				)
			);
	}
	public function invoke($param){
	    $user_values = parent::invoke();

		$this->model->update($user_values[0], $user_values[1], $user_values[2]);
	}	
		
}
?>
