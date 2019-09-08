<?php
class project {
	//variables
	private $id;
	private $project;
	private $location;
	private $start;
	private $finish;
	private $man_hours;
	static private $counter = 0;
	
	//constructor
	public function __construct($project, $location, $start, $finish, $man_hours)  {
		$this->id = self::$counter;
		
		$this->project = $project;  
	    $this->location = $location;
	    $this->start = $start;
	    $this->finish = $finish;
	    $this->man_hours = $man_hours;

	    self::$counter++;
    }
    //get and set functions
    public function get_id()	{return $this->id;}
	//public function set_id($name)	{$this->id = $id;}

    public function get_project()	{return $this->project;}
	public function set_project($project)	{$this->project = $project;}

	public function get_location()	{return $this->location;}
	public function set_location($location)	{$this->location = $location;}

	public function get_start()	{return $this->start;}
	public function set_start($start)	{$this->start = $start;}
	
	public function get_finish()	{return $this->finish;}
	public function set_finish($finish)	{$this->finish = $finish;}

	public function get_man_hours()	{return $this->man_hours;}
	public function set_man_hours($man_hours)	{$this->man_hours = $man_hours;}
}
?>

