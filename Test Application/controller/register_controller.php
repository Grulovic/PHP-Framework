<?php
include_once("form_controller.php");

class register_controller extends form_controller{
	public function __construct(){
		//declaring the model object
		include_once("model/messages_model.php");
		$this->model = new messages_model();
		
		$this->form = new form(
				"MESSAGE_STATE",
				array(
					new listbox('IN("MSG_NULL","MSG_ACCEPTED","MSG_REJECTED")',"All"),
					new listbox('='.'"MSG_NULL"',"Unattempted"),
					new listbox('='.'"MSG_ACCEPTED"',"Accepted"),
					new listbox('='.'"MSG_REJECTED"',"Rjected"),
				)
			);
	}

	public function invoke($user_id=null){
		$state = parent::invoke();
		
		//grab registers messages from messages model
		$messages = $this->model->get_register_messages($state);
		include_once("view/messages_register_view.php");

		//if button accept is selected
		if (isset($_GET['accept'])){
			//go to model and update the message state from null to accepted
			$this->model->update("messages",'msg_state = "MSG_ACCEPTED"','msg_id ="' . $_GET['message'] . '"');
			//force refresh by changing the header/url with the same url as is had
			header("Location: ".$_SERVER['PHP_SELF']."?controller=register2&action=invoke&params=".$param);
		}

		//if button reject is selected
		if (isset($_GET['reject'])){
			//go to model and update the message state from null to accepted
			$this->model->update("messages",'msg_state = "MSG_REJECTED"','msg_id ="' . $_GET['message'] . '"');	
			//force refresh by changing the header/url with the same url as is had
			header("Location: ".$_SERVER['PHP_SELF']."?controller=register2&action=invoke&params=".$param);
		}
	}	
		
}
?>
