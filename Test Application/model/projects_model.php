<?php
include_once("model/model.php");
include_once("model/classes/class_project.php");

class projects_model extends model {

	public function get_projects(){
		$column_names = 'p.*, SUM(a.Hours) AS "MAN_HOURS"';
		$table_name = 'me_projects p, me_assignments a';
		$conditions = 'WHERE p.Project = a.Project GROUP BY p.Project ASC';

		$columns = parent::get_columns($column_names, $table_name, $conditions);
		$data = parent::get_data($column_names, $table_name, $conditions);

		foreach ($data as $key => $project) {
			$projects[] = new project($project[$columns[0]], $project[$columns[1]], $project[$columns[2]], $project[$columns[3]], $project[$columns[4]]);
		}

		return $projects;
	}

	public function get_assignments($project_name){
		$column_names = 'a.Employee, e.Name, e.Specialty, a.Hours, a.As_date';
		$table_name = 'me_assignments a, me_employees e';
		$conditions = "WHERE a.Employee = e.employee AND Project = '$project_name' ORDER BY as_date ASC";

		$assignments = parent::select_table($column_names, $table_name, $conditions);

		$assignments->set_name($project_name." Assignments");

		return $assignments;
	}
}
?>