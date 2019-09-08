<?php
class table {
	//variables
	private $name;
	private $column_names = array();
	private $column_data = array();
	
	//constructor
	public function __construct($name, $column_names, $column_data)  {
		$this->name = $name;  
	    $this->column_names = $column_names;
	    $this->column_data = $column_data;
    }
    //get and set functions
    public function get_name()	{return $this->name;}
	public function set_name($name)	{$this->name = $name;}

	public function get_column_names()	{return $this->column_names;}
	public function set_column_names($column_names)	{$this->column_names = $column_names;}

	public function get_column_data()	{return $this->column_data;}
	public function set_column_data($column_data)	{$this->column_data = $column_data;}
}
?>