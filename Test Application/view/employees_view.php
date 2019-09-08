<?php
	if($employees!=null){
		echo "<h1>EMPLOYEES</h1>";
	}
	else{
		echo "<h1>ERROR</h1>";
	}
?>
<div class="box">
	<div class="info">
		<table class="employees">
		<?php
			if($employees!=null){
				foreach ($employees as $key => $emp) {
					//get parameters
					$query = $_GET;
					//replace parameter
					$query['emp'] = $key;
					//rebuild url
					$query_result = http_build_query($query);
					
					echo '<div class="employee">'
						.'<label>'.$emp->get_name().'</label>'
						.'<a class="small_button" href="'.$_SERVER['PHP_SELF']."?".$query_result.'">'."More Information".'</a>'
						.'</div>'
						;
				}
			}
			else{
				echo "Error while getting employees.";
			}
		?>
	</table>
	</div>
</div>