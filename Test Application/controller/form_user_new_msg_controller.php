<?php
include_once("form_controller.php");

class form_user_new_msg_controller extends form_controller{
	public function __construct(){
		include_once("model/model.php");
		$this->model = new model();
		
		$this->form = new form(
				"NEW MESSAGE",
				array(
					new input("Message:", "user_message", "text", "Enter message here..."),
				)
			);
	}
	public function invoke($user){
		//grab user values from form by invoking the parent function from form_controlelr
	    $user_values = parent::invoke();

	    //grab the count of messages in order to see the last id, and grab the date with time
	    $new_msg_info = $this->model->get_data("COUNT(msg_id) as MSG_NUM, NOW() as DATE","messages","");
	    //increaste the count by 1 to get the new message id
	    $new_msg_id = $new_msg_info[0]["MSG_NUM"] + 1;
	    
	    //set new message date
	    $date = $new_msg_info[0]["DATE"];

	    //if the user values (message text) from form are not empty
	    if($user_values[0]!=null){
	    	//insert a new message with the calculated id, user_id/param sent from the user_controller, date, user message from the form, and null state in order for the new inserted message to appear to register and user until there is a response from the register
	    	$this->model->insert("messages", $new_msg_id.", ".$user.', "'.$date.'", "'.$user_values[0].'", '.'"MSG_NULL"');	

	    	//force refresh by changing the header/url with the same url as is had
	    	header("Location: ".$_SERVER['PHP_SELF']."?controller=user&action=invoke&params=".$user);
	    }
	    
	}	
		
}
?>
