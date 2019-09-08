<?php
include_once("form_controller.php");

class form_user_message_controller extends form_controller{
	public function __construct(){
		include_once("model/model.php");
		$this->model = new model();
		
		$this->form = new form(
				"MODIFY MESSAGE",
				array(
					new input("Message:", "user_message", "text", "Enter message here..."),
				)
			);
	}
	public function invoke($msg_id){
		//modify the form object name in order to include the message id in the title
		$this->form->set_name("MODIFY MESSAGE (".$msg_id.")");
	    
	    //grab user values by invoking the parent function from form_controller
	    $user_values = parent::invoke();

	    //if the user values are not empty
	    if($user_values[0]!=null){
	    	//update the message message with the id/param sent from the user controller
	    	$this->model->update("messages",'msg_message = "'. $user_values[0] .'"','msg_id ="' . $msg_id . '"');
	    	//update the message state to NULL in order for the message to appear to the register
	    	$this->model->update("messages",'msg_state = "MSG_NULL"','msg_id ="' . $msg_id . '"');

	    	//force refresh by changing the header/url with the same url as is had
	    	header("Location: ".$_SERVER['PHP_SELF']."?controller=user&action=invoke&params=".$_GET["params"]);
	    }
	    
	}	
		
}
?>
