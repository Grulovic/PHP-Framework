<?php
include_once("form_controller.php");

class login_controller extends form_controller{
	private $router;

	public function __construct(){
		//model for database functions
		include_once("model/model.php");
		$this->model = new model();
		
		//login form object
		$this->form = new form(
				"LOGIN",
				array(
					new input("User Name:", "user_name", "text", "Enter user name here..."),
					new input("Password:", "user_password", "password", "Enter password here..."),
				)
			);
	}
	public function invoke($param=null){
		//grab the user values by using the parent fuction invoke from the form_controller
	    $user_values = parent::invoke($param);

	    //go to database and grab the user with the user name inserted by the user
	    $check = $this->model->get_data("user_id, user_login, user_password, user_role","users","where user_login = " . '"' . $user_values[0] . '"');

	    //if its not empty meaning there is a user
	    if($check!=null){
	    	//if the user password matches the password of the database
	    	if($user_values[1] == $check[0]["user_password"]){
	    		echo "Password correct.";
	    		
	    		//if the user is a regular user
	    		if($check[0]["user_role"] == "User"){
	    			//change the url in order for the router(from index) to grab the user controller and call invoke function using the user_id from the database
	    			header("Location: ".$_SERVER['PHP_SELF']."?controller=user&action=invoke&params=".$check[0]["user_id"]);
	    		}
	    		//if the user is register
	    		else if($check[0]["user_role"] == "Register"){
	    			//change the url in order for the router(from index) to grab the user controller and call invoke function using the user_id from the database
	    			header("Location: ".$_SERVER['PHP_SELF']."?controller=register&action=invoke&params=".$check[0]["user_id"]);
	    		}
	    		
	    	}
	    	//if the passwords that the user entered and the password from database dont match
	    	else{
	    		//display error
	    		$error = "Password not correct.";
	    		include_once("view/error.php");
	    	}
	    }
	    //if the user_name that the user entered and the user names from database dont have a match
	    else{
	    	//display error
	    	$error = "User does not exits.";
	    	include_once("view/error.php");
	    }


	}	
		
}
?>
