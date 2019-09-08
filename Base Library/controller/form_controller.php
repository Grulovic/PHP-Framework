<?php
include_once("controller.php");
include_once("model/classes/class_form.php");
include_once("model/classes/class_input.php");

class form_controller extends controller{
	protected static $model;
	protected static $form;

	public function __construct(){}

	public function invoke($param=null){
	    $form = $this->form;
	    include("view/form_view.php"); //display with view

	    //array for storing user values
	    $user_values = array();

		//if form submit is clcked
		if (isset($_POST['submit'])){
			//get values -> store them in user values

			$test_object = $form->get_inputs();

			if(get_class($test_object[0]) == "input"){
				foreach ($form->get_inputs() as $id => $input){
					$user_values[] = $_POST[$input->get_name()];
				}
			}
			

		return $user_values;
		}	
		
	}
}
?>