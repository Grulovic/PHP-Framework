<?php
	if($menu!=null){
		echo "<h1>".$menu->get_name()."</h1>";
	}
	else{
		echo "<h1>ERROR</h1>";
	}
?>
<div class="box">	
	<div class="info">
		<?php 
			if($menu!=null){
				foreach ($menu->get_options() as $id => $option){
					//get parameters
					$query = $_GET;
					//replace parameter
					if($option->get_controller() != null){
						$query['controller'] = $option->get_controller();
					}
					if($option->get_action() != null){
						$query['action'] = $option->get_action();
					}
					if($option->get_params() != null){
						$query['params'] = $option->get_params();
					}
					
					//rebuild url
					$query_result = http_build_query($query);

					echo '<a class="big_button" href="'.$_SERVER['PHP_SELF']."?".$query_result.'">'.$option->get_name().'</a>';
				}
			}
			else{
				echo "Error while getting menu.";
			}

			
						
		?>

	</div>
</div>