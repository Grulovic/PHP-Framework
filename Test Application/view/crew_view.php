<?php
	if($crew!=null){
		echo "<h1>Crew ".$crew->get_id()." Info</h1>";
	}
	else{
		echo "<h1>ERROR</h1>";
	}
?>
<div class="box">
	<div class="info2">
		<?php 
			if($crew!=null){
				echo '<p><span>ID: </span>'.$crew->get_id().'</p>';
				echo '<p><span>Manager: </span>'.$crew->get_manager().'</p>';
				echo '<p><span>Task: </span>'.$crew->get_task().'</p>';
				echo '<br><p><span>EXTRA STATISTICS:</span></p>';
				echo '<p><span>Project Number: </span>'.$crew->get_proj_num().'</p>';
				echo '<p><span>Assignments Number: </span>'.$crew->get_assgn_num().'</p>';
			}
			else{
				echo "Error while getting crew.";
			}

		?>
	</div>	
</div>