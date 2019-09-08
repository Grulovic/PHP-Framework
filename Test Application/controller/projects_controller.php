<?php
include_once("controller.php");

class projects_controller extends controller{
	protected static $model;
	protected static $form;

	public function __construct(){
		//declaring the model object
		include_once("model/projects_model.php");
		$this->model = new projects_model();

		include_once("model/classes/class_form.php");
		include_once("model/classes/class_input.php");
		$this->form = new form(
				"ADD ASSIGNMENT",
				array(
					new input("Employee ID:", "emp", "text", "Enter employee id here..."),
					new input("Date:", "date", "date", "Enter date here..."),
					new input("Hours:", "hours", "number", "Enter hours here..."),
				)
			);
	}

	public function invoke($param){
		$projects = $this->model->get_projects($param); //grab the correct projects model
		include("view/projects_view.php"); //display using view

		//if show information is selected
		if (isset($_GET['project'])){
			$project = $projects[$_GET['project']]; //get the specific project
			include 'view/project_view.php'; //display using view
		}

		//if show assignments is selected
		if (isset($_GET['assignments'])){
			$table = $this->model->get_assignments($_GET['assignments']); //get the assignments for specific project
			include 'view/table_view.php'; //display using view
	
			$form = $this->form;
			include("view/form_view.php");//display view
			
			$inputs = array();
			//if the submit button is clicked
			if (isset($_POST['submit'])){
				//get values
				foreach ($form->get_inputs() as $id => $input){
					$inputs[] = $_POST[$input->get_name()];
				}
				//combining the inserted values
				$column_values = '"'.$inputs[0].'",'.'"'.$_GET['assignments'].'",'.'"'.$inputs[1].'",'.$inputs[2];
				//insert into database
				$this->model->insert("me_assignments", $column_values);	
			}		
		}
	}
}
?>