<?php
class form {
	//variables
	private $id;
	private $name;
	private $inputs = array();
	static private $counter = 0;
	
	//constructor
	public function __construct($name, $inputs)  {  
        $this->id = self::$counter;
	    $this->name = $name;
	    $this->inputs = $inputs;
	    self::$counter++;
    }
    //get and set functions
    public function get_id()	{return $this->id;}
	//public function set_id($id)	{$this->id = $id;}

	public function get_name()	{return $this->name;}
	public function set_name($name)	{$this->name = $name;}

	public function get_inputs()	{return $this->inputs;}
	public function set_inputs($options)	{$this->inputs = $inputs;}
}
?>