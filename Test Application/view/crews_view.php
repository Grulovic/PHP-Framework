<?php
	if($crews!=null){
		echo "<h1>CREWS</h1>";
	}
	else{
		echo "<h1>ERROR</h1>";
	}
?>
<div class="box">
	<div class="info">
		<?php
			if($crews!=null){
				foreach ($crews as $key => $crew) {
					//get parameters
					$query = $_GET;
					//replace parameter
					unset($query['crew_assignments']);
					$query['crew'] = $key;
					//rebuild url
					$query_result = http_build_query($query);
					
					echo 
						'<div class="project">'
						.'<label style="padding-left:100px; font-size:20px;"><b>Crew '.$crew->get_id().'</b></label><br>'
						.'<label><b>Manager: </b>'.$crew->get_manager().'</label><br>'
						.'<label><b>Task: </b>'.$crew->get_task().'</label><br>'
						.'<a class="small_button" href="'.$_SERVER['PHP_SELF']."?".$query_result.'">'."More Information".'</a>';
				////////////////////////////////////////////////////////
						
					//get parameters
					$query = $_GET;
					//replace parameter
					unset($query['crew']);
					$query['crew_assignments'] = $crew->get_id();
					//rebuild url
					$query_result = http_build_query($query);
					
					echo '<a class="small_button" href="'.$_SERVER['PHP_SELF']."?".$query_result.'">'."Show Assignments".'</a><br>'
						.'</div>'
						;
						
					
				}
			}
			else{
				echo "Error while getting crews.";
			}

			

		?>
	</div>
</div>