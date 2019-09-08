<?php
class listbox {
	//variables
	private $id;
	private $value;
	private $name;
	private static $counter = 0;
	
	//constructor
	public function __construct($value, $name)  {
		$this->id = self::$counter;
		
		$this->value = $value;  
		$this->name = $name;

		self::$counter++;
	}
    //get and set functions
    public function get_id()	{return $this->id;}
	//public function set_id($name)	{$this->id = $id;}

    public function get_value()	{return $this->value;}
	public function set_value($value)	{$this->value = $value;}

	public function get_name()	{return $this->name;}
	public function set_name($name)	{$this->name = $name;}
}
?>

