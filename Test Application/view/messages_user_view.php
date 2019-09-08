<?php
	//header fot the element
	echo "<h1>User(".$_GET["params"].") Messages</h1>";
?>
<div class="box">
	<div class="info">
		<?php
			//if the messages sent from the user controller are not empty
			if($messages!=null){
				//for each of the messages 
				foreach ($messages as $key => $message) {
					//get parameters
					$query = $_GET;
					//replace parameter
					unset($query['new_msg']);//unset new message indicator
					$query['message'] = $message->get_id();//setting the id of the message
					$query['modify'] = 1;//indicator that the modify link was clicked
					//rebuild url
					$query_result = http_build_query($query);
					
					echo 
						//div for displaying the message
						'<div class="project">'//class is just for the css styling
						.'<label><b>ID: </b>'.$message->get_id().'</label>'
						.'<label><b>Date: </b>'.$message->get_date().'</label>'
						.'<label><b>State: </b>'.$message->get_state().'</label>'
						.'<br><label><b>Message: </b>'.$message->get_message().'</label>'
						.'<br><a class="small_button" href="'.$_SERVER['PHP_SELF']."?".$query_result.'">'."Modify".'</a>'
						.'</div>';//button with the previous specification of the url
				}
			}
			//if the messages are empty
			else{
				echo "There are no messages.";
			}
			//////////////////////////////////////////////////////////////////////////////////////////
			//get parameters
			$query = $_GET;
			//replace parameter
			unset($query['modify']);//unset the modify indicator
			unset($query['message']);//unset message id as it is not needed for the insert of a new message
			$query['new_msg'] = 1;//indicator that the new message link was clicked
			//rebuild url
			$query_result = http_build_query($query);

			//button with the previous specification of the url		
			echo '<br><a class="small_button" href="'.$_SERVER['PHP_SELF']."?".$query_result.'">'."Insert new message".'</a>';
			
		?>
	</div>
</div>