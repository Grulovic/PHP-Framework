<?php
include_once("model/model.php");
include_once("model/classes/class_project2.php");

class projects_model extends model {

	public function get_projects(){
		$column_names = 'p.*, COUNT( DISTINCT a.crew_id) as "NUM_OF_CREWS", COUNT( DISTINCT a.assgn_id) as "NUM_OF_ASSIGNMENTS"';
		$table_name = 'me412_projects p, me412_assignments a';
		$conditions = 'WHERE p.proj_id = a.proj_id GROUP BY p.proj_id';

		$columns = parent::get_columns($column_names, $table_name, $conditions);
		$data = parent::get_data($column_names, $table_name, $conditions);


		foreach ($data as $key => $project) {
			$projects[] = new project2($project[$columns[0]], $project[$columns[1]], $project[$columns[2]], $project[$columns[3]], $project[$columns[4]], $project[$columns[5]], $project[$columns[6]], $project[$columns[7]], $project[$columns[8]]);
		}

		return $projects;
	}
	
	public function get_assignments($project_id, $project_name){
		$column_names = 'proj_id, assgn_id, crew_id, assgn_start, assgn_finish, assgn_type';
		$table_name = 'me412_assignments';
		$conditions = "WHERE proj_id = '$project_id'";

		$assignments = parent::select_table($column_names, $table_name, $conditions);

		$assignments->set_name($project_name." Assignments");

		return $assignments;
	}
	
}
?>