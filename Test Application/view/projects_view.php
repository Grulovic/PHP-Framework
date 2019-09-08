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
					unset($query['assignments']);
					$query['project'] = $key;
					//rebuild url
					$query_result = http_build_query($query);
					
					echo 
						'<div class="project">'
						.'<label>'.$project->get_project().'</label>'
						.'<a class="small_button" href="'.$_SERVER['PHP_SELF']."?".$query_result.'">'."Show Information".'</a>';
				////////////////////////////////////////////////////////
					//get parameters
					$query = $_GET;
					//replace parameter
					unset($query['project']);
					$query['assignments'] = $project->get_project();
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