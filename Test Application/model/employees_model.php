<?php
include_once("model/model.php");
include_once("model/classes/class_emp.php");

class employees_model extends model {
	
	public function get($choice){
		switch ($choice) {
			case "employees":
				$employees = array(
					new emp("Emp1","Lname1", 1, "Specialty 1"),
					new emp("Emp2","Lname2", 2, "Specialty 2"),
					new emp("Emp3","Lname3", 3, "Specialty 3"),
					new emp("Emp4","Lname4", 4, "Specialty 4"),
				);
			break;

			case "employees_db":
				$employees = self::get_employees();
			break;
		}

		return $employees;	
	}
	public function get_employees(){
		$column_names = '*';
		$table_name = 'me_employees';
		$conditions = 'ORDER BY employee';

		$columns = parent::get_columns($column_names, $table_name, $conditions);
		$data = parent::get_data($column_names, $table_name, $conditions);

		foreach ($data as $key => $employee) {
			$employees[] = new emp($employee[$columns[0]],$employee[$columns[1]],$employee[$columns[2]],$employee[$columns[3]]);
		}

		return $employees;
	}
}
?>