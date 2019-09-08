<?php
include_once("controller.php");

class assignments_controller extends controller{
	protected static $model;
	protected static $form;

	public function __construct(){
		//declaring the model object
		include_once("model/assignments_model.php");
		$this->model = new assignments_model();

		include_once("model/classes/class_form.php");
		include_once("model/classes/class_input.php");
		$this->form = new form(
				"SHOW ASSIGNMENTS",
				array(
					new input("Project ID:", "project", "text", "Enter project id here..."),
					new input("Crew ID:", "crew", "text", "Enter crew id here..."),
				)
			);
	}

	public function invoke($param){
		$form = $this->form;
		include("view/form_view.php");//display view
		
		$inputs = array();
		//if the submit button is clicked
		if (isset($_POST['submit'])){
			//get values
			foreach ($form->get_inputs() as $id => $input){
				$inputs[] = $_POST[$input->get_name()];
			}
			
		$table = $this->model->get($inputs[0], $inputs[1]); //grab the correct projects model
		include("view/table_view.php"); //display using view	
		}

		
	}
}
?>