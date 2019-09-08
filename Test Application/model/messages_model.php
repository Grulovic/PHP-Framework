<?php
include_once("model/model.php");
include_once("model/classes/class_message.php");

class messages_model extends model {

	//function for grabbing all messages
	public function get_messages(){
		//sql statement information
		$column_names = '*';
		$table_name = 'messages';
		$conditions = null;

		//grab columns and grab data
		$columns = parent::get_columns($column_names, $table_name, $conditions);
		$data = parent::get_data($column_names, $table_name, $conditions);

		//if the data is not epmpty
		if($data!=null){
			//for each of the data
			foreach ($data as $key => $message) {
				//insert a new message with data[column name]
				$messages[] = new message($message[$columns[0]], $message[$columns[1]], $message[$columns[2]], $message[$columns[3]], $message[$columns[4]]);
			}
		}
		//then return the messages 
		return $messages;
	}

	//function for grabbing register messages
	public function get_register_messages($state=null){
		//sql statement information
		$column_names = 'm.msg_id, u.user_name, m.msg_datetime, m.msg_message, m.msg_state';
		$table_name = 'messages m, users u';
		$conditions = 'WHERE m.msg_user = u.user_id AND msg_state '.$state.' ORDER BY m.msg_datetime DESC';
		
		//grab columns and grab data
		$columns = parent::get_columns($column_names, $table_name, $conditions);
		$data = parent::get_data($column_names, $table_name, $conditions);

		//if the data is not epmpty
		if($data!=null){
			foreach ($data as $key => $message) {
				//insert a new message with data[column name]
				$messages[] = new message($message[$columns[0]], $message[$columns[1]], $message[$columns[2]], $message[$columns[3]], $message[$columns[4]]);
			}
		}
		//then return the messages 
		return $messages;
	}

	//function for grabbing user messages, with the id/param sent from the user_controller
	public function get_user_messages($user){
		//sql statement information
		$column_names = '*';
		$table_name = 'messages';
		$conditions = 'WHERE msg_state = "MSG_REJECTED" AND msg_user = "'. $user .'"';

		//grab columns and grab data
		$columns = parent::get_columns($column_names, $table_name, $conditions);
		$data = parent::get_data($column_names, $table_name, $conditions);

		//if the data is not epmpty
		if($data!=null){
			foreach ($data as $key => $message) {
				//insert a new message with data[column name]
				$messages[] = new message($message[$columns[0]], $message[$columns[1]], $message[$columns[2]], $message[$columns[3]], $message[$columns[4]]);
			}
		}
		//then return the messages 
		return $messages;
	}
}
?>