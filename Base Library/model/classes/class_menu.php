<?php
class menu {
	//variables
	private $id;
	private $name;
	private $options = array();
	private static $counter = 0;
	
	//constructor
	public function __construct($name, $options)  {  
        $this->id = self::$counter;
	    $this->name = $name;
	    $this->options = $options;
	    self::$counter++;
    }
    //get and set functions
    public function get_id()	{return $this->id;}
	//public function set_id($id)	{$this->id = $id;}

	public function get_name()	{return $this->name;}
	public function set_name($name)	{$this->name = $name;}

	public function get_options()	{return $this->options;}
	public function set_options($options)	{$this->options = $options;}
}
?>