<?php
	//if the messages sent from the controller are not empty
	if($messages!=null){
		echo "<h1>Register(".$_GET["params"].") Messages</h1>";
	}
	//if they are display error
	else{
		echo "<h1>ERROR</h1>";
	}
?>
<div class="box">
	<div class="info">
		<?php
			//if the messages sent from the controller are not empty
			if($messages!=null){
				//for each of the array elemeny
				foreach ($messages as $key => $message) {
					//get parameters
					$query = $_GET;
					//replace parameter
					unset($query['reject']);//unset reject indicator
					$query['message'] = $message->get_id();//set url param message to the id of the message which will indicate if the button is pressed which message wants to be accepted
					$query['accept'] = 1;//indicator that the accept link was clicked
					//rebuild url
					$query_result = http_build_query($query);
					
					echo 
						//div for displaying the message
						'<div class="project">'//class is just for the css styling
						.'<label><b>ID: </b>'.$message->get_id().'</label>'
						.'<label><b>User: </b>'.$message->get_user().'</label>'
						.'<label><b>Date: </b>'.$message->get_date().'</label>'
						.'<label><b>State: </b>'.$message->get_state().'</label>'
						.'<br><label><b>Message: </b>'.$message->get_message().'</label>'
						.'<br><a class="small_button" href="'.$_SERVER['PHP_SELF']."?".$query_result.'">'."Accept".'</a>';//button with the previos specification of the url

				////////////////////////////////////////////////////////

					//get parameters
					$query = $_GET;
					//replace parameter
					unset($query['accept']);//unset accept indicator
					$query['message'] = $message->get_id();//set url param message to the id of the message which will indicate if the button is pressed which message wants to be accepted 
					$query['reject'] = 1;//indicator that the reject link was clicked
					//rebuild url
					$query_result = http_build_query($query);
					
					echo '<a class="small_button" href="'.$_SERVER['PHP_SELF']."?".$query_result.'">'."Reject".'</a><br>'
					.'</div>';//button with the previos specification of the url
				}
			}
			//if messages are empty display error message
			else{
				echo "Error while getting messages.";
			}
?>
	</div>
</div>