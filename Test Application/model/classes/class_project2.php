<?php
class project2 {
	//variables
	private $id;
	private $name;
	private $location;
	private $start;
	private $finish;
	private $class;
	private $priority;
	//extras
	private $crew_num;
	private $assgn_num;
	
	//constructor
	public function __construct($id, $name, $location, $start, $finish, $class, $priority, $crew_num, $assgn_num)  {
		$this->id = $id;
		$this->name = $name;  
	    $this->location = $location;
	    $this->start = $start;
	    $this->finish = $finish;
	    $this->class = $class;
	    $this->priority = $priority;
	    $this->crew_num = $crew_num;
	    $this->assgn_num = $assgn_num;
    }
    //get and set functions
    public function get_id()	{return $this->id;}
	//public function set_id($name)	{$this->id = $id;}

	public function get_name()	{return $this->name;}
	public function set_name($name)	{$this->name = $name;}

	public function get_location()	{return $this->location;}
	public function set_location($location)	{$this->location = $location;}

	public function get_start()	{return $this->start;}
	public function set_start($start)	{$this->start = $start;}
	
	public function get_finish()	{return $this->finish;}
	public function set_finish($finish)	{$this->finish = $finish;}

	public function get_class()	{return $this->class;}
	public function set_class($class)	{$this->class = $class;}

	public function get_priority()	{return $this->priority;}
	public function set_priority($priority)	{$this->priority = $priority;}

	public function get_crew_num()	{return $this->crew_num;}
	public function set_crew_num($crew_num)	{$this->crew_num = $crew_num;}

	public function get_assgn_num()	{return $this->assgn_num;}
	public function set_assgn_num($assgn_num)	{$this->assgn_num = $assgn_num;}
}
?>

