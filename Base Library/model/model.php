<?php
include_once("model/classes/class_mysqli_database.php");
include_once("model/classes/class_table.php");

class model{
	protected $database;

	public function __construct(){
		$this->database = new mysqli_database('localhost','root','mysql','database');
	}

	public function get_columns($column_names, $table_name, $conditions){
		//OPEN DATABASE CONNECTION
		$this->database->connection();
		
		$results = $this->database->runsql("SELECT $column_names FROM $table_name $conditions");

		if($results){
			echo('Sucessfully selected<br>');
			//TABLE COLUMNS
			$this->database->runsql("CREATE TEMPORARY TABLE temp_table AS (SELECT $column_names FROM $table_name $conditions)");
			$columns = $this->database->runsql("SHOW COLUMNS FROM temp_table");

			$table_columns = array();

    		if($columns){
			    while($row = $columns->fetch_assoc()) {
			    	$table_columns[] = $row["Field"];
			    }
			}

			return $table_columns;
		}else{
			echo('Error while getting columns<br>');	
		}
	
		//CLOSE DATABASE CONNECTION
		$this->database->close_connection();
	}

	public function get_data($column_names, $table_name, $conditions){
		$table_columns = self::get_columns($column_names, $table_name, $conditions);

		//OPEN DATABASE CONNECTION
		$this->database->connection();
			
		$results = $this->database->runsql("SELECT $column_names FROM $table_name $conditions");

		if($results){
			echo('Sucessfully selected<br>');

			while ($row = $results->fetch_assoc()) {
		        $data[] = $row;
		    }
		    
		    return $data;
		}else{
			echo('Error while selecting<br>');	
		}

		//CLOSE DATABASE CONNECTION
		$this->database->close_connection();
	}

	public function get_array_data($column_names, $table_name, $conditions){
		$table_columns = self::get_columns($column_names, $table_name, $conditions);

		//OPEN DATABASE CONNECTION
		$this->database->connection();
			
		$results = $this->database->runsql("SELECT $column_names FROM $table_name $conditions");

		if($results){
			echo('Sucessfully selected<br>');
			//TABLE DATA
			$table_data = array();

		    while($row = $results->fetch_assoc()) {
		        for( $i = 0; $i<sizeof($table_columns); $i++ ) {
        			$table_data[] = $row[$table_columns[$i]];
    			}
		    }

		    return $table_data;
		}else{
			echo('Error while selecting<br>');	
		}

		//CLOSE DATABASE CONNECTION
		$this->database->close_connection();
	}
	
	public function select_table($column_names, $table_name, $conditions){
		$table_columns = self::get_columns($column_names, $table_name, $conditions);
		$table_data = self::get_array_data($column_names, $table_name, $conditions);

		if($table_columns!= null && $table_data!=null){
			$table = new table($table_name, $table_columns, $table_data);
			
			return $table;
		}
		
	}
	
	public function insert($table_name, $column_values){
			//OPEN DATABASE CONNECTION
			$this->database->connection();

			$results = $this->database->runsql("INSERT INTO $table_name VALUES ($column_values)");

			if($results){
				echo('Sucessfully inserted<br>');
			}
			else{
				echo('Error while inserting<br>');	
			}

			//CLOSE DATABASE CONNECTION
			$this->database->close_connection();
	}

	public function delete($table_name, $condition){
			//OPEN DATABASE CONNECTION
			$this->database->connection();

			$results = $this->database->runsql("DELETE FROM $table_name WHERE $condition");

			if($results){
				echo('Sucessfully deleted<br>');
			}
			else{
				echo('Error while deleting<br>');	
			}

			//CLOSE DATABASE CONNECTION
			$this->database->close_connection();
	}

	public function update($table_name, $column_name_value, $condition){
			//OPEN DATABASE CONNECTION
			$this->database->connection();
			
			$results = $this->database->runsql("UPDATE $table_name SET $column_name_value WHERE $condition");

			if($results){
				echo('Sucessfully updated<br>');
			}
			else{
				echo('Error while updating<br>');	
			}

			//CLOSE DATABASE CONNECTION
			$this->database->close_connection();
	}
}
?>