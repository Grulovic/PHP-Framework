<?php
	if($projects!=null){
		echo "<h1>PROJECTS</h1>";
	}
	else{
		echo "<h1>ERROR</h1>";
	}
?>
<div class="box">
	<div class="info">
		<?php
			if($projects!=null){
				foreach ($projects as $key => $project) {
					//get parameters
					$query = $_GET;
					//replace parameter
					unset($query['project_assignments']);
					unset($query['project_name']);
					$query['project'] = $key;
					//rebuild url
					$query_result = http_build_query($query);
					
					echo 
						'<div class="project">'
						.'<label style="text-align:center; padding-left:90px; font-size:20px;"><b>'.$project->get_name().'</b></label><br>'
						.'<label><b>Location: </b>'.$project->get_location().'</label><br>'
						.'<label><b>Start: </b>'.$project->get_start().'</label><br>'
						.'<label><b>Finish: </b>'.$project->get_finish().'</label><br>'
						.'<label><b>Class: </b>'.$project->get_class().'</label><br>'
						.'<label><b>Priority: </b>'.$project->get_priority().'</label><br>'

						.'<a class="small_button" href="'.$_SERVER['PHP_SELF']."?".$query_result.'">'."More Information".'</a>';
				////////////////////////////////////////////////////////
						
					//get parameters
					$query = $_GET;
					//replace parameter
					unset($query['project']);
					$query['project_name'] = $project->get_name();
					$query['project_assignments'] = $project->get_id();
					//rebuild url
					$query_result = http_build_query($query);
					
					echo '<a class="small_button" href="'.$_SERVER['PHP_SELF']."?".$query_result.'">'."Show Assignments".'</a><br>'
						.'</div>'
						;
						
					
				}
			}
			else{
				echo "Error while getting projects.";
			}


			

		?>
	</div>
</div>