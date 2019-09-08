<?php
	if($project!=null){
		echo "<h1>".$project->get_project()." Info</h1>";
	}
	else{
		echo "<h1>ERROR</h1>";
	}
?>
<div class="box">
	<div class="info2">
		<?php 
			if($project!=null){
				echo '<p><span>ID: </span>'.$project->get_id().'</p>';
				echo '<p><span>Project: </span>'.$project->get_project().'</p>';
				echo '<p><span>Location: </span>'.$project->get_location().'</p>';
				echo '<p><span>Start: </span>'.$project->get_start().'</p>';
				echo '<p><span>Finish: </span>'.$project->get_finish().'</p>';
				echo '<p><span>Total Man Hours: </span>'.$project->get_man_hours().'</p>';
			}
			else{
				echo "Error while getting project.";
			}

		?>
	</div>	
</div>