<?php
class message {
	//variables
	private $id;
	private $user;
	private $date;
	private $message;
	private $state;
	
	//constructor
	public function __construct($id, $user, $date, $message, $state)  {
		$this->id = $id;
		$this->user = $user;  
		$this->date = $date;  
	    $this->message = $message;
	    $this->state = $state;
    }
    //get and set functions
    public function get_id()	{return $this->id;}
	//public function set_id($name)	{$this->id = $id;}

    public function get_user()	{return $this->user;}
	public function set_user($user)	{$this->user = $user;}

	public function get_date()	{return $this->date;}
	public function set_date($date)	{$this->date = $date;}

	public function get_message()	{return $this->message;}
	public function set_message($message)	{$this->message = $message;}
	
	public function get_state()	{return $this->state;}
	public function set_state($state)	{$this->state = $state;}
}
?>

