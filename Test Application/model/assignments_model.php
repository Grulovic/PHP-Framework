<?php
include_once("model/model.php");
include_once("model/classes/class_assignment.php");

class assignments_model extends model {

	public function get($project_id = null, $crew_id = null){
		$column_names = 'a.assgn_id, p.proj_name, a.crew_id, a.assgn_start, a.assgn_finish, a.assgn_type';
		$table_name = 'me412_assignments a, me412_projects p';
		$conditions = 'WHERE a.proj_id = p.proj_id';
		
		
		if($project_id == null && $crew_id != null){
			$conditions .= " AND a.crew_id='$crew_id'";
		}
		else if($crew_id == null && $project_id != null){
			$conditions .= " AND a.proj_id='$project_id'";
		}
		else if($project_id != null && $crew_id != null){
			$conditions .= " AND a.proj_id='$project_id' AND a.crew_id='$crew_id'";
		}
		else if($project_id == null && $crew_id == null){
			$conditions .= "";
		}
		
		
		$data = parent::select_table($column_names, $table_name, $conditions);

		if($project_id == null && $crew_id != null){
			$data->set_name("Assignments ( Crew ID: ".$crew_id.")");			
		}
		else if($crew_id == null && $project_id != null){
			$data->set_name("Assignments ( Proj ID: ".$project_id.")");
		}
		else if($project_id != null && $crew_id != null){
			$data->set_name("Assignments ( Proj ID: ".$project_id.", Crew ID: ".$crew_id.")");
		}
		else if($project_id == null && $crew_id == null){
			$data->set_name("Assignments");
		}

		return $data;
	}
}
?>