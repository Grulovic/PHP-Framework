<?php
include_once("controller.php");

class employees_controller extends controller{
	protected static $model;

	public function __construct(){
		//declaring the model object
		include_once("model/employees_model.php");
		$this->model = new employees_model(); 
	}

	public function invoke($param){
		$employees = $this->model->get($param); //grab the correct model
		include("view/employees_view.php"); //display with view

		//if employee is set
		if (isset($_GET['emp'])){
			$emp = $employees[$_GET['emp']]; //grab specific employee
			include ('view/employee_view.php'); //display with view
		}
	}
}
?>