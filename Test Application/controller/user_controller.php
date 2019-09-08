<?php
include_once("controller.php");
include_once("model/classes/class_message.php");

class user_controller extends controller{
	protected static $model;

	public function __construct(){
		//declaring the model object
		include_once("model/messages_model.php");
		$this->model = new messages_model();
	}

	public function invoke($user_id){
		//grabbing the user mesages from the messages model
		$messages = $this->model->get_user_messages($user_id);
		include_once("view/messages_user_view.php");

		//if modify button is clicked
		if (isset($_GET['modify'])){
			//include, declare and start the form for modifying user message
			include_once("controller/form_user_message_controller.php");
			$form = new form_user_message_controller();
			$form->invoke($_GET["message"]);
		}

		//if new message button is clicked
		if (isset($_GET['new_msg'])){
			//include, declare and start the form for inserting a new user message
			include_once("controller/form_user_new_msg_controller.php");
			$form = new form_user_new_msg_controller();
			$form->invoke($user_id);
		}
	}
}
?>