<?php
class emp {
	//variables
	private $id;
	private $name;
	private $hire_date;
	private $specialty;
	
	//constructor
	public function __construct($id, $name, $hire_date, $specialty)  {
		$this->id = $id;
		$this->name = $name;
	    $this->hire_date = $hire_date;
	    $this->specialty = $specialty;
    }
    //get and set functions
    public function get_id()	{return $this->id;}
	public function set_id($name)	{$this->id = $id;}

    public function get_name()	{return $this->name;}
	public function set_name($name)	{$this->name = $name;}

	public function get_hire_date()	{return $this->hire_date;}
	public function set_hire_date($hire_date)	{$this->hire_date = $hire_date;}

	public function get_specialty()	{return $this->specialty;}
	public function set_specialty($specialty)	{$this->specialty = $specialty;}
}
?>

