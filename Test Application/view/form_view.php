<?php
	if($form!=null){
		echo "<h1>".$form->get_name()."</h1>";
	}
	else{
		echo "<h1>ERROR</h1>";
	}
?>
<div class="box">
	<div class="info">
		<form action="" method="post">
		<?php
			if($form!=null){
				$test_object = $form->get_inputs();

				if(get_class($test_object[0]) == "input"){
					
					foreach ($form->get_inputs() as $id => $input){
						echo '<label>'.$input->get_label().'</label>'
							.'<input type="'.$input->get_type().'" name="'.$input->get_name().'" placeholder="'.$input->get_placeholder().'"/>'
							.'<br>';
					}	
				}
				else if(get_class($test_object[0]) == "listbox"){

					echo '<select name="'.$form->get_name().'">';
					
					foreach ($form->get_inputs() as $id => $input){
						echo "here";
						echo
						'<option value='.$input->get_value().'>'.$input->get_name().
						'</option>';
					}

					echo '<select>';
				}

				
				echo '<input type="submit" name="submit"/>';
			}
			else{
				echo "Error while getting form.";
			}
			
		?>
		
		</form>

</div>
</div>
