<?php 
	if($table!=null){
		echo "<h1>".$table->get_name()."</h1>";
	}else{
		echo "<h1>ERROR</h1>";
	}
?>
<div class="box">
<div class="info">
<div class="sql_table">
<table>
	<?php 
		if($table!=null){	
			//TABLE COLUMNS
			echo '<tr>';
			if($table!=null){
				foreach ($table->get_column_names() as $key => $value) {
					echo "<th>".$value."</th>";
				}
			}
			echo '</tr>';

			
			//TABLE DATA
			echo '<tr>';
			$column_counter = 0;
			if($table!=null){
				foreach ($table->get_column_data() as $key => $value) {
					echo "<td>".$value."</td>";
					$column_counter++;

					if($column_counter % sizeof($table->get_column_names()) == 0){
						echo "</tr><tr>";
					}
				}
			}
			echo '</tr>';
		}else{
			echo "Error while getting table.";
		}

	?>
</table>
</div>
</div>
</div>
