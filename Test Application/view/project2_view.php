<?php
	if($project!=null){
		echo "<h1>".$project->get_name()." Info</h1>";
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
				echo '<p><span>Name: </span>'.$project->get_name().'</p>';
				echo '<p><span>Location: </span>'.$project->get_location().'</p>';
				echo '<p><span>Start: </span>'.$project->get_start().'</p>';
				echo '<p><span>Finish: </span>'.$project->get_finish().'</p>';
				echo '<p><span>Class: </span>'.$project->get_class().'</p>';
				echo '<p><span>Priority: </span>'.$project->get_priority().'</p>';
				echo '<br><p><span>EXTRA STATISTICS:</span></p>';
				echo '<p><span>Crew number: </span>'.$project->get_crew_num().'</p>';
				echo '<p><span>Assignments number: </span>'.$project->get_assgn_num().'</p>';
			}
			else{
				echo "Error while getting project.";
			}

		?>
	</div>	
</div>