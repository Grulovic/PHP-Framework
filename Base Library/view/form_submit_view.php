<h1>FORM SUBMIT</h1>
<div class="box">
	<div class="info">
		<?php
			echo '<textarea>';
			if($submit!=null){
				foreach ($submit as $key => $value) {
					echo "Input ".$key.": ".$value."\n";
				}	
			}
			else{
				echo "Error while grabbing form submit.";
			}
			
			
			echo '</textarea>';
		?>
	</div>
</div>
