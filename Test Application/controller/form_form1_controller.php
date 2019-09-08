<?php
include_once("form_controller.php");

class form_form1_controller extends form_controller{
	public function __construct(){
		$this->form = new form(
				"FORM 1",
				 array(
					new input("Name:", "name", "text", "Enter name here..."),
					new input("Last Name:", "lname", "text", "Enter last name here..."),
					new input("Age:", "age", "number", "Enter age here..."),
				)
			);
	}
	public function invoke($param){
	    $user_values = parent::invoke();

		$submit = $user_values;
		include "view/form_submit_view.php";	
	}	
		
}
?>
