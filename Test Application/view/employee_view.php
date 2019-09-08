<?php
	if($emp!=null){
		echo "<h1>".$emp->get_name()." Info</h1>";
	}
	else{
		echo "<h1>ERROR</h1>";
	}
?>
<div class="box">
	<div class="info2">
		<?php 
			if($emp!=null){
				echo '<p><span>ID: </span>'.$emp->get_id().'</p>';
				echo '<p><span>Name: </span>'.$emp->get_name().'</p>';
				echo '<p><span>Hire Date: </span>'.$emp->get_hire_date().'</p>';
				echo '<p><span>Specialty: </span>'.$emp->get_specialty().'</p>';
			}
			else{
				echo "Error while getting employee.";
			}
		?>
	</div>	
</div>