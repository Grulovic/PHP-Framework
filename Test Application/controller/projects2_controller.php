<?php
include_once("controller.php");

class projects2_controller extends controller{
	protected static $model;

	public function __construct(){
		//declaring the model object
		include_once("model/projects2_model.php");
		$this->model = new projects_model();
	}

	public function invoke($param){
		$projects = $this->model->get_projects($param); //grab the correct projects model
		include("view/projects2_view.php"); //display using view

		//if show information is selected
		if (isset($_GET['project'])){
			$project = $projects[$_GET['project']]; //get the specific project
			include 'view/project2_view.php'; //display using view
		}

		
		//if show assignments is selected
		if (isset($_GET['project_assignments'])){
			$table = $this->model->get_assignments($_GET['project_assignments'],$_GET['project_name']); //get the assignments for specific project
			include 'view/table_view.php'; //display using view

		}	
		
	}
}
?>