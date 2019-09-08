<?php
include_once("controller.php");

class crews_controller extends controller{
	protected static $model;

	public function __construct(){
		//declaring the model object
		include_once("model/crews_model.php");
		$this->model = new crews_model();
	}

	public function invoke($param){
		$crews = $this->model->get_crews(); //grab the correct projects model
		include("view/crews_view.php"); //display using view

		//if show information is selected
		if (isset($_GET['crew'])){
			$crew = $crews[$_GET['crew']]; //get the specific project
			include 'view/crew_view.php'; //display using view
		}

		
		//if show assignments is selected
		if (isset($_GET['crew_assignments'])){
			$table = $this->model->get_assignments($_GET['crew_assignments']); //get the assignments for specific project
			include 'view/table_view.php'; //display using view

		}
		
		
	}
}
?>