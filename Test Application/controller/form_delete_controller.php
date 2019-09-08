<?php
include_once("form_controller.php");

class form_delete_controller extends form_controller{
	public function __construct(){
		include_once("model/model.php");
		$this->model = new model();
		
		$this->form = new form(
				"DELETE",
				array(
					new input("Table Name:", "table_name", "text", "Enter table name here..."),
					new input("Condition:", "condition", "text", "Enter condition name here..."),
				)
			);
	}
	public function invoke($param){
	    $user_values = parent::invoke();

		$this->model->delete($user_values[0], $user_values[1]);
	}	
		
}
?>
