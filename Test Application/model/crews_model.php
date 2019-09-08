<?php
include_once("model/model.php");
include_once("model/classes/class_crew.php");

class crews_model extends model {

	public function get_crews(){
		$column_names = 'c.*, COUNT( DISTINCT a.proj_id) as "NUM_OF_PROJECTS", COUNT( DISTINCT a.assgn_id) as "NUM_OF_ASSIGNMENTS"';
		$table_name = 'me412_crews c, me412_assignments a';
		$conditions = 'WHERE c.crew_id = a.crew_id GROUP BY c.crew_id';

		$columns = parent::get_columns($column_names, $table_name, $conditions);
		$data = parent::get_data($column_names, $table_name, $conditions);

		foreach ($data as $key => $crew) {
			$crews[] = new crew($crew[$columns[0]],$crew[$columns[1]],$crew[$columns[2]],$crew[$columns[3]],$crew[$columns[4]]);
		}

		return $crews;
	}
	
	public function get_assignments($crew_id){
		$column_names = 'crew_id, assgn_id, proj_id, assgn_start, assgn_finish, assgn_type';
		$table_name = 'me412_assignments';
		$conditions = "WHERE crew_id = '$crew_id'";

		$assignments = parent::select_table($column_names, $table_name, $conditions);

		$assignments->set_name("Crew ".$crew_id." Assignments");

		return $assignments;
	}
	
}
?>