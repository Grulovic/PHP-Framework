<?php
class input {
	//variables
	private $id;
	private $label;
	private $name;  		
	private $type;
	private $placeholder;
	private static $counter = 0;
	
	//constructor
	public function __construct($label, $name, $type, $placeholder) {
		$this->id = self::$counter;
		$this->label = $label;
		$this->name = $name;
		$this->type = $type;
		$this->placeholder = $placeholder;
		self::$counter++;
	}
	//get and set functions
	public function get_id()	{return $this->id;}
	//public function set_id($id)	{$this->id = $id;}

	public function get_label()	{return $this->label;}
	public function set_label($label)	{$this->label = $label;}

	public function get_name()	{return $this->name;}
	public function set_name($name)	{$this->name = $name;}

	public function get_type()	{return $this->type;}
	public function set_type($type)	{$this->type = $type;}

	public function get_placeholder()	{return $this->placeholder;}
	public function set_placeholder($placeholder)	{$this->placeholder = $placeholder;}
	
}
?>